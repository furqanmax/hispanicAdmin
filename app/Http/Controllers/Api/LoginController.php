<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\other\ValidationRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends APiResponse
{
    public function __construct()
    {
        $this->middleware('api');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'lat' => 'required|string',
            'long' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors()->first());
        }

        $user = new User();

        $user->name = $request->name;
        $user->lat = $request->lat;
        $user->long = $request->long;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($user->save()) {
            return $this->authResponse($tokenResult, $token);
        } else {
            return $this->unknownError('unable to register user');
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return $this->errorResponse($validator->errors()->first());
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        $token->save();

        return $this->authResponse($tokenResult, $token);
    }
}
