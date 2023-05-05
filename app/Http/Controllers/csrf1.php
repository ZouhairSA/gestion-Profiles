<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csrf1 extends Controller
{
    public function Afficher1()
    {
        return view("CSRF1.registrement");
    }
}
