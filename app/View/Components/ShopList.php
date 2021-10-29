<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShopList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $urlTitle;
    public function __construct()
    {
         $this -> getUrl();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components/homePageComponent/breadcrumbs');
    }
    private function getUrl()
    {
        if (\Request::is('shopList')){
            $this -> urlTitle = "shopppdfgdrp";
        }
    }
}
