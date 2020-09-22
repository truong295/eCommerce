<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Product;

class Newest extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $newests;
    
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $newests=Product::orderBy("id","desc")->take(5)->get();
        return view('components.newest')->with('newests',$newests);
    }
    public function newests()
    {
        $newests=Product::orderBy("id","desc")->take(5)->get();
        return $newests;
    }
}
