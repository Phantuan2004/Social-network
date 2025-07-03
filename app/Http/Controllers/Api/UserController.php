<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return response()->json([
            'status' => 'success',
            'data' => $users,
        ], 200);
    }

    public function detail($id)
    {
        try {
            $user = User::query()->find($id);
            if ($user) {
                return response()->json([
                    'status' => 'success',
                    'data' => $user
                ], 200);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Không có bản ghi tương ứng.'
            ], 404);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 404);
        }
    }
}
