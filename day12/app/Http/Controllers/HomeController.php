<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home', $data);
    } 
}
