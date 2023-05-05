<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller3 extends Controller
{
    public function etudiant()
    {
        $data = [];
        $data['nom'] = "ZOHAIR";
        $data['prenom'] = "SABYOUD";
        $data['postee'] = "Developpeur";
        $data['module'] = ["gestion des donnees", "Developper en Backend", "Projet de sunthese"];

        return view("Tp1.Routage1", $data);
    }
}
