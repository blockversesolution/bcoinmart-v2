<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home";
        return view('frontend.home.index', $data);
    }

    public function buy()
    {
        $data['page_title'] = "Buy";
        return view('frontend.buy.index', $data);
    }

    public function markets()
    {
        $data['page_title'] = "Markets";
        return view('frontend.markets.index', $data);
    }

    public function trading()
    {
        $data['page_title'] = "Trading";
        return view('frontend.trading.index', $data);
    }

    public function opportunity()
    {
        $data['page_title'] = "Opportunity";
        return view('frontend.opportunity.index', $data);
    }

    public function tokenUnlock()
    {
        $data['page_title'] = "Token Unlock";
        return view('frontend.token_unlock.index', $data);
    }

    public function pTopBuy()
    {
        $data['page_title'] = "P2P Buy";
        return view('frontend.p2p.buy', $data);
    }

    public function pTopSell()
    {
        $data['page_title'] = "P2P Sell";
        return view('frontend.p2p.sell', $data);
    }

    public function earnOverview()
    {
        $data['page_title'] = "Earn Overview";
        return view('frontend.earn.overview', $data);
    }

    public function affiliate()
    {
        $data['page_title'] = "Affiliate";
        return view('frontend.affiliate.index', $data);
    }

    public function refer()
    {
        $data['page_title'] = "Refer";
        return view('frontend.refer.index', $data);
    }

    public function pageMaintenance()
    {
        return view('frontend.maintenance.page_maintenance');
    }
}
