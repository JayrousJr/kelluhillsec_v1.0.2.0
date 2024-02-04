<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    function home() {
        return view('/site/index');
    }
    function news() {
        return view('/site/news');
    }
     function contact() {
        return view('/site/contact');
    }
     function about() {
        return view('/site/about');
    }
}