<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class selecte_1 extends Controller
{

    public function getDataFromDB()
    {
        // concernent le premier tableau 
        // $x = DB::select("SELECT * FROM teacher");

        // concerent le dexieme taleau qui afficher les valeurs :

        $x = DB::select("SELECT * FROM module ");
        $n = DB::select("SELECT * FROM student ");

        // return $FOR1;

        // return view("Recuperation.contact", [
        //     "infos" => $dt
        // ]);
        return view("Recuperation.contact", [
            "moduless" => $x,
            "modulesr" => $n
        ]);
    }


    public function getContact2()
    {
        $n = DB::select("SELECT * FROM student ");
        return view("Recuperation.caffichager2", [
            "modulesr" => $n
        ]);
    }
    // the  first :
    public function updateData($c)
    {
        $n = DB::select("SELECT * FROM student where id_student=?", [$c]);
        return view("Recuperation.modifier", [
            "module" => $n
        ]);
    }
    // the  seconde:

    public function updateData_module($c1)
    {
        $n = DB::select("SELECT * FROM module where id_module=?", [$c1]);
        return view("Recuperation.modifie_md", [
            "module" => $n
        ]);
    }


    public function validatemdf(Request $request)
    {

        $codeSt = $request->input('id_student');
        $code1 = intval($codeSt);
        $nameS = $request->input('name_student');
        $lastS = $request->input('lastename_student');
        // DB::update('update student set name_student = ? where id_student = 4', [$nameS]);
        DB::update('update student set name_student = ?,lastename_student = ? where id_student = ?', [$nameS, $lastS, $code1]);
        return redirect("/contactR2");
    }
    public function validatemd_model(Request $request)
    {


        $codeSt = $request->input('id_module');
        $code1 = intval($codeSt);
        $name = $request->input('nom_module');
        $specialite = $request->input('specialite');

        // DB::update('update student set name_student = ? where id_student = 4', [$nameS]);
        DB::update('update modele set nom_module = ?,specialite = ? where id_module = ?', [$name, $specialite, $code1]);
        return redirect("/contactR2");
    }
    // public function Deletedata($t)
    // {
    //     $v = DB::delete("delete from student where id_student= $t");
    //     return redirect("/contactR2");
    // }
    // IA:
    public function Deletedata($t)
    {
        return view('Recuperation.confirmationDelete', ['id_student' => $t]);
    }



    public function DeleteConfirmed(Request $request)
    {
        $t = $request->input('id_student');
        DB::delete("delete from student where id_student= $t");
        return redirect("/contactR2");
    }
    // Deletedata_module

    public function Deletedata_module(Request $request)
    {
        $t = $request->input('id_module');
        DB::delete("delete from module where id_module= $t");
        return redirect("/tp_Afficher");
    }

    // public function getDatt()
    // {
    //     $n = DB::select("SELECT * FROM student ");
    //     return view()
    // }
    // public function getDataFromDB1()
    // {
    //     // concernent le premier tableau 
    //     // $x = DB::select("SELECT * FROM teacher");

    //     // concerent le dexieme taleau qui afficher les valeurs :

    //     $x = DB::select("SELECT * FROM  student");


    //     // return $FOR1;

    //     // return view("Recuperation.contact", [
    //     //     "infos" => $dt
    //     // ]);
    //     return view("Recuperation.caffichager2", [
    //         "moduless" => $x
    //     ]);
    // }


    public function storeData(Request $request)
    {
        $request->validate([
            "prenom" => "required|min:1",
            // 'email' => 'required|email|unique:users,email',
            "nom" => "required|min:2",
        ]);
        // dd(1);
        DB::table('student')->insert([
            'name_student' => $request->input('nom'),
            'lastename_student' => $request->input('prenom')
        ]);
        return redirect('/contactR2');
        // return view("Recuperation.Principale");
    }
}
