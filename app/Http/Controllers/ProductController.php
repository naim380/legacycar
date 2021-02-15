<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class ProductController extends Controller
{
    public function product_details($id)
    {

        $car = Car::find($id);
//    if ($car->prix >=1000000){
//        return view('product-details',['car'=>$car,'prix'=>"cher"]);
//    }
//    else{
//        return view('product-details',['car'=>$car,'prix'=>"pas cher"]);
        return view('product-details',['car' => $car]);
    }


    public function product_list()
    {
       //dd(Cars::all());
        $cars = Car::all();
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


