<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featured=Product::orderBy('sell_times','desc')->take(7)->get();
        $laptops=Product::where('category_id','4')->take(7)->get();
        $phones=Product::where('category_id','3')->take(7)->get();
        view()->share('featured',$featured);
        view()->share('laptops',$laptops);
        view()->share('phones',$phones);
        return view('welcome');
    }
}
