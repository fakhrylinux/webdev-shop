<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $view_data = [
            'produk' => $produk,
        ];

        return view('home.index',$view_data);
    }
}
