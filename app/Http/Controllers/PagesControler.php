<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Network;
use App\Models\News;
use App\Models\Population;
use App\Models\Result;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesControler extends Controller
{

    function home(Request $request)
    {
        $ip = $request->ip();
        $visitor = Visitor::firstorCreate(['ipAddress' => $ip]);
        $visitor->increment('visits');
        $visitor->save();
        // $visitors = Visitor::count();



        $totalVisitors = DB::table('visitors')->count();

        $currentWeekStart = Carbon::now()->startOfWeek();
        $weeklyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentWeekStart)
            ->count();

        $currentMonthStart = Carbon::now()->startOfMonth();
        $monthlyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentMonthStart)
            ->count();

        $currentDay = Carbon::now()->startOfDay();
        $dailyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentDay)
            ->count();

        $data['totalVisitors'] = $totalVisitors;
        $data['weeklyVisitors'] = $weeklyVisitors;
        $data['monthlyVisitors'] = $monthlyVisitors;
        $data['dailyVisitors'] = $dailyVisitors;



        $data['carousel'] = Carousel::latest()->get();
        $data['population'] = Population::latest()->take(1)->get();
        $data['news'] = News::latest()->take(5)->get();
        $data['social']  = Network::latest()->get();
        $data['result'] = Result::latest()->take(4)->get();
        return view('/site/index', $data);
    }
    function news()
    {
        $data['social']  = Network::latest()->get();
        $data['newsData'] = News::latest()->get();
        return view('/site/news', $data);
    }
    function results()
    {
        $data['social']  = Network::latest()->get();
        $data['result'] = Result::latest()->get();
        return view('/site/results', $data);
    }
    function contact()
    {
        $data['social']  = Network::latest()->get();
        return view('/site/contact', $data);
    }
    function about()
    {
        $data['population'] = Population::latest()->take(1)->get();
        $data['social']  = Network::latest()->get();
        $data['population'] = Population::latest()->take(1)->get();
        $data['teacher'] = User::all();
        return view('/site/about', $data);
    }
    function oneNews(News $newsData)
    {
        $data['social']  = Network::latest()->get();
        $data['news'] = $newsData;
        return view('/site/singlenews', $data);
    }
    function viewResult(Result $result)
    {
        $data['social']  = Network::latest()->get();
        $data['result'] = $result;
        return view('/site/singleResult', $data);
    }
}
