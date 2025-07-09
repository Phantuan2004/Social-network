<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPassword extends Controller
{
    // Quên mật khẩu
    public function forgotPassword(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users,email",
        ]);

        $email = $request->email;

        DB::table('password_reset_tokens')
            ->where('email', $email)
            ->delete(); // Xóa các mã xác nhận cũ nếu có

        // Tạo mã xác nhận
        $code = str_pad(random_int(100000, 999999), 6, '0', STR_PAD_LEFT);

        // Lưu database
        DB::table('password_reset_tokens')->insert([
            'email' => $email,
            'code' => Hash::make($code),
            'expires_at' => now()->addMinutes(15),
            'created_at' => now()
        ]);

        // Gửi email
        Mail::to($email)->send(new SendEmailResetPassword($code));

        return response()->json([
            'status' => 'success',
            'message' => 'Đã gửi mã xác nhận tới email của bạn',
        ], 200);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|size:6',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $email = $request->email;
        $code = $request->code;

        // Sử dụng DB transaction để đảm bảo consistency
        return DB::transaction(function () use ($email, $code, $request) {
            // Tìm và lock record
            $passwordReset = DB::table('password_reset_tokens')
                ->where('email', $email)
                ->where('expires_at', '>', now())
                ->whereNull('used_at')
                ->lockForUpdate() // Lock để tránh race condition
                ->first();

            if (!$passwordReset || !Hash::check($code, $passwordReset->code)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Mã xác nhận không hợp lệ hoặc đã hết hạn',
                ], 400);
            }

            // Update theo ID cụ thể
            DB::table('password_reset_tokens')
                ->where('id', $passwordReset->id)
                ->update(['used_at' => now()]);

            User::where('email', $email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_reset_tokens')
                ->where('id', $passwordReset->id)
                ->delete(); // Xóa mã xác nhận sau khi sử dụng

            return response()->json([
                'status' => 'success',
                'message' => 'Mật khẩu đã được đặt lại thành công',
            ], 200);
        });
    }
}
