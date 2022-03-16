<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signin(){
        return view('pages.signin');
    }

    public function register(){
        return view('pages.register');
    }
}
