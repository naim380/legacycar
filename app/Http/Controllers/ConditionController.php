<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function condition(Request $request)
    {
        $text=$request->input("text");
        if (str_word_count($text) <= 5){

       $result= "le nombre de mots inferieur à 5!";
        } elseif (str_word_count($text)  > 5 AND str_word_count($text)  < 10){
            $result= "le nombre de mots superieur et inferieur à 10!";
        } else{
            $result= "le nombre de mots superieur ou égal à 10!";
        }
        return redirect('condition')->with("statut",$result);
    }

    public function affichage()
    {

        return view('condition');
    }
}
