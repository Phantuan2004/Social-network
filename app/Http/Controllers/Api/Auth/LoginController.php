<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        // Kiểm tra email và mật khẩu
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email hoặc mật khẩu không đúng',
            ], 403);
        }

        // Kiểm tra trạng thái tài khoản
        if (!$user->is_active) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tài khoản của bạn đã bị vô hiệu hóa.',
            ], 403);
        }

        $rememberMe = $request->remember_me;

        if ($rememberMe) {
            $token = $user->createToken('auth-token', ['*'], now()->addDays(7))->plainTextToken;
            $expiresAt = now()->addDays(7);
        } else {
            $token = $user->createToken('auth-token', ['*'], now()->addHours(5))->plainTextToken;
            $expiresAt = now()->addHours(5);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Đăng nhập thành công',
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
            'expires_at' => $expiresAt->toISOString(),
            'remember_me' => $request->remember_me ?? false,
        ], 200);
    }

    // Phương thức check token
    public function checkToken(Request $request)
    {
        if (auth('api')->check()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Token hợp lệ',
                'user' => auth('api')->user(),
            ], 200);
        }
    }

    // Phương thức xử lý khi không xác thực
    // (được gọi khi token không hợp lệ hoặc đã hết hạn)
    public function unauthenticated(Request $request)
    {
        return response()->json([
            'status' => 'error',
            'message' => 'Token không hợp lệ hoặc đã hết hạn',
        ], 401);
    }
}
