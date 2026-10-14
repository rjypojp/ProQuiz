<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {   
        \Log::info('Custom LoginResponse called');
        return response()->json([
            'message' => 'ログイン成功',
            'user' => $request->user(),
        ]);
    }
}