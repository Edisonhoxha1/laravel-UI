<?php

namespace App\Http\Controllers;

use App\Models\ProductFeature;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginateNumber = request() -> input('perPage');
        $search = request() -> query('search');
        if($search){
            $products = ProductFeature::Where('name', 'LIKE', "%{$search}%") -> paginate($paginateNumber);
        } else {
            $products = ProductFeature::paginate(6);
        }

        return view('shopList')
            ->with('products', ProductFeature::all())
            ->with('products', $products);
    }
}
