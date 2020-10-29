<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin');
    }

    public function purchase_officer()
    {
        return view('purchase_officer');
    }

    public function user()
    {
        return view('user');
    }
}
