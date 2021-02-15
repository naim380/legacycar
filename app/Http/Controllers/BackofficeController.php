<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class BackofficeController extends Controller
{

    public function formulaire()
    {
        return view('formulaire.formulaire');
    }
    public function validation(Request $request)
    {
        $validated = $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'km' => 'required|numeric',
            'prix' => 'required|numeric',
            'picture' => 'required',
            'description' => 'required',

        ]);
        $Car = new Car;
        $Car->seller_id = 1;
        $Car->marque = $request->marque;
        $Car->model = $request->model;
        $Car->year = $request->year;
        $Car->km = $request->km;
        $Car->prix = $request->prix;
        $Car->picture = $request->picture;
        $Car->description = $request->description;
        $Car->save();
        return redirect()->route("backoffice");

    }
    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route("backoffice");
    }
    public function modifier(Request $request, $id)
    {
        $validated= $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'km' => 'required|numeric',
            'prix' => 'required|numeric',
            'picture' => 'required',
            'description' => 'required',

        ]);
        $car=Car::find($id);
        //dd($car);
        //dd($request->year);
        $car->marque = $request->input("marque");
        $car->model = $request->input("model");
        $car->year = $request->input("year");
        $car->km = $request->input("km");
        $car->prix = $request->input("prix");
        $car->picture = $request->input("picture");
        $car->description = $request->input("description");
        $car->save();
        //dd($car);
        return view('formulaire.update',['car'=>$car]);
    }
    public function affichage($id){
        $car=Car::find($id);
        return view('formulaire.update',['car'=>$car]);

    }
    public function backoffice(){
        $cars=Car::all();
        return  view('backoffice',['cars'=>$cars]);
    }
}


