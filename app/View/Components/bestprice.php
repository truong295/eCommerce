<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Product;
class bestprice extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $bps;
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.bestprice');
    }
    public function bps()
    {
        $bps=Product::orderBy("price","asc")->take(5)->get();
        return $bps;
    }
}
