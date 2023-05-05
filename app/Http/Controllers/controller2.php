<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class controller2 extends Controller
{
    public function test()
    {
        echo "La methode test de le notrolleur Numero 2.";
    }

    public function Somme($n1, $n2)
    {
        $rst = $n1 + $n2;
        return view('Admin.home', ['n1' => $n1, 'n2' => $n2, 'rst' => $rst]);
        // echo "la somme : $n1 + $n2 = $rst";
    }
    public function Produit($n1, $n2)
    {
        $rst = $n1 * $n2;
        echo "le Produit : $n1 * $n2 = $rst";
    }
    public function home1()
    {
        return view('home');
    }
    public function homeR($n1)
    {
        return view('home', ['Prenom' => $n1]);
    }
}
