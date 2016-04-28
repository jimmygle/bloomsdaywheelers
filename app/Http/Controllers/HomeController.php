<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class HomeController extends Controller
{

    /**
     * Display the home view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}
