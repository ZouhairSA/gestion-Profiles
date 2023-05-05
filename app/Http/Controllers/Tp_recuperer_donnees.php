<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;


class Tp_recuperer_donnees extends Controller
{
    public function getData(Request $request)
    {
        //  en cree une  fonction de de validation  des  inforamtions du Formulaire :
        $request->validate([
            "nom" => "required",
            "email" => "required",
            "password" => "required"
        ]);
        // en cree ce tableau  pou  recuperer  les  informations du Formulaire 
        $data = [];
        // $data["nom"] = $request->input("nom");
        $data["nom"] = $request->nom;
        // $data["email"] = $request->input("email");
        $data["email"] = $request->email;
        // $data["password"] = $request->input("password");
        $data["password"] = $request->password;


        // le partie d'Affichage  dans la page suivant
        return view("Recuperation.Affichage", $data);
    }
    public function storeData(Request $request)
    {
        $request->validate([
            "prenom" => "required",
            "nom" => "required",
        ]);

        DB::table('student')->insert([
            'lastename_student' => $request->input("prenom"),
            'name_student' => $request->input("nom"),
            // "password" => $request->input("password")
        ]);
        return redirect('/select1');
    }
}
