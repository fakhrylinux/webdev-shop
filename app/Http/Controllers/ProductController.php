<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $products = Product::all();
        $viewData["products"] = $products;
//dd($viewData);
        return view('home.index')->with("viewData", $viewData);
    }
}
