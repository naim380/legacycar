<?php

namespace App\Http\Controllers;

use App\Models\Sellers;
use Illuminate\Http\Request;
use App\Models\Car;

class BackofficeController extends Controller
{
    //Affiche le back avec la liste des voitures
    public function index()
    {
        $cars = Car::all();
        $sellers = Sellers::all();
        return view('backoffice', ['cars' => $cars, 'sellers' => $sellers]);
    }

    //Recois le formulaire et Créer un vendeur et une voiture
    public function addCar(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required| max:255 ',
                'last_name' => 'required| max:255',
                'mail' => 'required|email|unique:users,email',
                'phone' => 'required| integer',

                'marque' => 'required| max:255',
                'model' => 'required | max:255',
                'year' => 'required| integer',
                'km' => 'required| integer',
                'prix' => 'required| numeric',
                'description' => 'required| string',
            ]);

            $car = new Car;
            $seller = new Seller;

            $seller->firstname = $request->input('first_name');
            $seller->lastname = $request->input('last_name');
            $seller->mail = $request->input('mail');
            $seller->phone = $request->input('phone');

            $seller->save();

            $car->marque= $_POST['marque'];
            $car->model = $request->input('model');
            $car->year = $request->input('year');
            $car->km = $request->input('km');
            $car->prix = $request->input('prix');
            $car->picture = 'image';
            $car->description = $request->input('description');
            $car->seller_id = $seller->id;

            $car->save();

            return redirect()->route('product-self', $car->id)->with('status', 'Création reussie');

        } catch (Exception $e) {
            $message_error = 'erreur';

            return redirect('formulaire')->with('error', 'echec de la création');
        }

    }

    //Affiche le formulaire pour modifier
    public function update(Car $car)
    {
        return view('formulaire', ['car' => $car]);
    }

    //Recois les modification et les change SI il y en a
    public function updated_car(Car $car, Request $request)
    {
        try {
            $validate = $request->validate([
                'marque' => 'required',
                'model' => 'required',
                'year' => 'required',
                'km' => 'required',
                'prix' => 'required',
                'picture' => '',
                'description' => 'required',
            ]);

            $car->update($request->all());

            $car->save();

            return redirect('backoffice')->with('status', 'Mise à jour réussie');
        }
        catch(Exception $e)
        {
            return redirect('backoffice')->with('error', 'Mise à jour échouée');
        }

    }

    //Delete une voiture
    public function delete(Car $car)
    {
        $car->delete();
        return redirect('backoffice')->with('status', 'Effacement reussi');

    }

}
