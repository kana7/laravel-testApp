<?php

namespace BeginingLaravel\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index()
    {
        return view('about');
    }
}
