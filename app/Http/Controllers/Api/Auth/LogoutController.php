<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $request->user()->currrentAccessToken()->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Đăng xuất thành công',
        ], 200);
    }
}
