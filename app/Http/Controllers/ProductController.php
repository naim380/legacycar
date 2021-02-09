<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

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
       //dd(Cars::all());
        $cars = DB::select('select * from cars');
        return view('products-list',['cars' => $cars]);

    }
    public function sortbyname()
    {
        //dd(Cars::all());
        $cars = Car::all()->sortBy('model');
        return view('products-list',['cars' => $cars]);

    }
    public function sortbyprice()
    {
        //dd(Cars::all());
        $cars = Car::all()->sortBy('prix');
        return view('products-list',['cars' => $cars]);

    }


}


