<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        // Create usercode 
        $data['code'] = 'U-' . Str::random(10);

        // Ghép firstname và lastname
        $data['fullname'] = $data['firstname'] . ' ' . $data['lastname'];
        unset($data['firstname']);

        // Kiểm tra email
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email đã tồn tại trong hệ thống',
            ], 400);
        }

        // Mã hóa password
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng ký thành công',
            'data' => $user
        ], 201);
    }
}
