<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

}