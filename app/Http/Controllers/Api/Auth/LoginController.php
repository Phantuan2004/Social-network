<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials, $request->remember)) {
            return response()->json([
                'status' => 'error',
                'message' => 'email hoặc mật khẩu không đúng'
            ], 401);
        }

        $user = User::where('email', $credentials['email'])->first();

        $token = $user->createToken('token', ['*'], now()->addMinutes(1));

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng nhập thành công',
            'token' => $token->plainTextToken,
            'expries_at' => $token->accessToken->expires_at,
            'user' => $user,
        ], 200);
    }
}
