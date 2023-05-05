<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Transaction1 extends Controller
{
    public function Transaction1()
    {
        DB::transaction(function () {
            // DB::insert('insert into module (nom_module, specialite) values (?, ?)', ["", 'Verifie Transaction_1']);
            DB::delete('delete from module where id_module = 15');
        });
    }
}
