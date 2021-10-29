<?php

namespace App\View\Components;

use App\Models\TrendingProduct;
use Illuminate\View\Component;

class TrendProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $trendingProd;
    public function __construct()
    {
        $this -> trendingProd = TrendingProduct::where('productsName', '=', 'Trending Products')
                                                ->simplePaginate(4);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homePageComponent.trendingProducts');
    }
}
