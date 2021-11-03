<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    
    // public function __contruct() {
    //     $this->middleware('guest:admin');
    // }

    public function showLoginForm() {
        return view('auth.admin-login');
    }

    public function login() {
        return true;
    }
}
