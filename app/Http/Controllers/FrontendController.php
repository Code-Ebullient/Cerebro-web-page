<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landing()
    {
        return view ('landing');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function features()
    {
        return view ('features');
    }

    public function features_onsite()
    {
        return view ('features#onsite');
    }

    public function features_design()
    {
        return view ('features#design');
    }

    public function features_maintenance()
    {
        return view ('features#maintenance');
    }
}

