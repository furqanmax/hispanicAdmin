<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APiResponse extends Controller
{
    public function dashboardResponse()
    {
        return response()->json([
            'status' => 'S',
            'message' => 'Dashbpard',
            'message' => 'hello',
        ]);
    }


    public function authResponse($tokenResult,$token)
    {
        return response()->json([
            'status' => 'S',
            'message' => 'Auth Token',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }


    public function errorResponse($error)
    {
        return response()->json([
            'status' => 'F',
            'message' => 'validation error',
            'error' => $error,
        ]);
    }


    public function unknownError($error)
    {
        return response()->json([
            'status' => 'F',
            'message' => 'unknown error',
            'error' => $error,
        ]);
    }


}
