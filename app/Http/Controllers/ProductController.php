<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $id = 101;
        $produk = 'Keyboard Mechanical';

        return view('list_product', compact('id', 'produk'));
    }
}
