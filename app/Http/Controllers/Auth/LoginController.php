<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo() 
    {
        $role = Auth::user()->role;

        if($role == 1)
        {
            return '/admin';
        }
        else if($role == 2)
        {
            return '/purchase-officer';
        }
        else
        {
            return '/user';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
