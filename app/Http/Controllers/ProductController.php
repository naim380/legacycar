<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cars;

class ProductController extends Controller
{
    public function product_details($id)
    {
        $cars = DB::select('select * from cars where id = ?', [$id]);

        return view('product-details',['car'=>$cars[0]]);
        //dd($cars);
    }
    public function product_list()
    {
       dd(Cars::all());
        $cars = DB::select('select * from cars');
        return view('products-list',['cars' => $cars]);

    }


}


