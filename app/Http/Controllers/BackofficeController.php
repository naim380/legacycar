<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class BackofficeController extends Controller
{
    public function backoffice()
    {
        return view('backoffice');
    }
    public function formulaire()
    {
        return view('formulaire.formulaire');
    }
    public function validation(Request $request)
    {
        $validated = $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'year' => 'required',
            'km' => 'required',
            'prix' => 'required',
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
        return view('formulaire.formulaire');
    }
    public function delete($id)
    {
        $car=Car::find($id);
        $car->delete();
        return view('formulaire.formulaire');
    }
    public function modifier(Request $request, $id)
    {
        $validated= $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'year' => 'required',
            'km' => 'required',
            'prix' => 'required',
            'picture' => 'required',
            'description' => 'required',

        ]);
        $Car=Car::find($id);
        $Car->seller_id = 1;
        $Car->marque = $request->marque;
        $Car->model = $request->model;
        $Car->year = $request->year;
        $Car->km = $request->km;
        $Car->prix = $request->prix;
        $Car->picture = $request->picture;
        $Car->description = $request->description;
        $Car->save();
        return view('formulaire.formulaire');
    }
    public function affichage($id){
        $car=Car::find($id);
        return view('formulaire.update',['car'=>$car]);

    }
}


