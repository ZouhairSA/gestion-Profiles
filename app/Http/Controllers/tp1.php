<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tp1 extends Controller
{
    public function Afficher_Admin(Request $request, $user, $pwd)
    {
        if ($user == "admin" && $pwd == "1234@A") {
            return view("Recuperation.Admin");
        } else {
            // return redirect("/tp_Registrement");
            return abort(404);
        }
        // /si l’id de l’user est ‘admin’ et mot de passe=’1234@A’ mettre une valeur dans la session
    }
}
