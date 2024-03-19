<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contact()
    {
        return view('contact', [
            'name' => 'Samantha',
            'age' => '29 years'
        ]);
    }

    public function createUser()
    {

    }

    public function disable()
    {

    }

    public function login()
    {
        return view('login');
    }
}
