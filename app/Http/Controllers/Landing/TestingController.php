<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;

class TestingController
{
    public function landing()
    {
        return view('landing.home.index');
    }
}
