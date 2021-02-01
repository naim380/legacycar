<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_details()
    {
        return view('product-details');
    }
    public function products_list()
    {
        return view('product-list');
    }
}
