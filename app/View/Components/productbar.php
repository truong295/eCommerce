<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Product;
class productbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $products;
    public function __construct($products)
    {
        $this->products=$products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.productbar');
    }
}
