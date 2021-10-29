<?php

namespace App\View\Components;

use App\Models\ProductLeatest;
use Illuminate\View\Component;

class LeatestProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $leatestProd;
    public function __construct()
    {
        $this -> leatestProd = ProductLeatest::where('productsName', '=', 'Leatest Products')
                                            ->orderBy('id', 'desc')->take(3)->get();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homePageComponent.leatestProducts');
    }
}
