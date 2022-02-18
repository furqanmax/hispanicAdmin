<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function getProfile()
    {
        return Auth::user();
    }
}
