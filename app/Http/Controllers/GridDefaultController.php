<?php

namespace App\Http\Controllers;

use App\Models\ProductFeature;
use Illuminate\Http\Request;

class GridDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request() -> query('search');
        if($search){
            $products = ProductFeature::Where('name', 'LIKE', "%{$search}%") -> paginate(12);
        } else {
            $products = ProductFeature::paginate(12);
        }
        return view('gridDefault')
            ->with('products', ProductFeature::all())
            ->with('products', $products);
    }
}
