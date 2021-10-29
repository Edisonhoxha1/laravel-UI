<?php

namespace App\View\Components;

use App\Models\ProductFeature;
use Illuminate\View\Component;

class FeaturedProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $featuredProd;
    public function __construct()
    {
        $this -> featuredProd = ProductFeature::where('productsName', '=', 'Feature Products')
                                                ->orderBy('id', 'desc')->take(4)->get();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homePageComponent.featuredProducts');
    }
}
