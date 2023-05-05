<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yield1 extends Controller
{
    public function AfficherYield()
    {
        return view("Yield.Secondaire");
    }
    public function AfficherYield1()
    {
        return view("Tp1.accuel");
    }
    public function AffchierContact()
    {
        return view("Tp1.contact");
    }
    public function AfficheHome1()
    {
        return view("CSRF1.HomeS");
    }
    public function Afficher2M()
    {
        return view("Recuperation.Regitrement2");
    }
}
