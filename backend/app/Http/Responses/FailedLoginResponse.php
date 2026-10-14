<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\FailedLoginResponse as FailedLoginResponseContract;

class FailedLoginResponse implements FailedLoginResponseContract
{
    public function toResponse($request)
    {
        return response()->json([
            'message' => 'ユーザー名またはパスワードが違います。',
        ], 401);
    }
}