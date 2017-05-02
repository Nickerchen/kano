<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        return view('pages.home');
    }

    public function about(){
        $cities = ["Hamburg", "Konstanz", "Soest"];
        return view('pages.about', compact('cities')) ;
    }

}
