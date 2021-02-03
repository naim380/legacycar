<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_details($id)
    {
        return view('product-details',['id_produit'=> $id]);
    }
    public function products_list()
    {
        return view('product-list');
    }
}
