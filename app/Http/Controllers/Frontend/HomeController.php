<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function buy()
    {
        return view('frontend.buy.index');
    }

    public function markets()
    {
        return view('frontend.markets.index');
    }

    public function trading()
    {
        return view('frontend.trading.index');
    }
}
