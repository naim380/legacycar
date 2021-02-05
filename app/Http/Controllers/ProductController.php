<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_details($id)
    {
        $cars = DB::select('select * from cars where id = ?', [$id]);
        //dd($cars);
        //return view('product-details',['cars' => $cars]); foreach
        //return view('product-details',$cars[0]);
        return view('product-details',['car'=>$cars[0]]);
       // return view($cars[0]);
    }
    public function product_list()
    {
        $cars = DB::select('select * from cars');
        return view('products-list',['cars' => $cars]);
    }
}
