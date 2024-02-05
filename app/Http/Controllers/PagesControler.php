<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class PagesControler extends Controller
{
    function home() {
        return view('/site/index');
    }
    function news() {
        $data['newsData'] = News::latest()->get();
        return view('/site/news',$data);
    }
     function contact() {
        return view('/site/contact');
    }
     function about() {
        $data['teacher'] = User::all();
        return view('/site/about',$data);
    }
    function oneNews(News $news) {
        $data['news'] = $news;
        return view('/site/singlenews', $data);
    }
}