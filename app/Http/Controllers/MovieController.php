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

    /**
     * @return \Illuminate\View\View
     */
    public function sessions()
    {
        return view('sessions');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function cinema()
    {
        return view('cinema');
    }

    /**
     * 
     * @return \Illuminate\View\View
     */
    public function contacts()
    {
        return view('contacts');
    }
}