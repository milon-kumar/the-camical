<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Traning;
use App\Models\TraningCategory;
use App\Models\TraningOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home()
    {
        $popular_products = Product::where('status',1)->where('is_popular',1)->get();
        $featured_products = Product::where('status',1)->where('is_featured',1)->get();
        return view('frontend.pages.home.home',compact('popular_products','featured_products'));
    }

    public function about()
    {
        return view('frontend.pages.about.about');
    }

    public function ourTeam()
    {
        return view('frontend.pages.our_team.our_team');
    }

    public function contract()
    {
        return view('frontend.pages.contract.contract');
    }

}
