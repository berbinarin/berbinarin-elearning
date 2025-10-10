<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;

class TestingController
{
    public function landing()
    {
        return view('landing.home.index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function pretest()
    {
        return view('landing.pretest.index');
    }

    public function pretestQuestion()
    {
        return view('landing.pretest.test');
    }

    public function materials()
    {
        return view('landing.materials.index');
    }
}
