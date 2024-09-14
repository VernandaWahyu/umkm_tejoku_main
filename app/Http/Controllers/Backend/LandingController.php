<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('backend.pages.landings.index');
    }
}

