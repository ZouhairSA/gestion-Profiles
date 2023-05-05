<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Controller;
use App\Http\Controllers\controller2;
use App\Http\Controllers\controller3;
use App\Http\Controllers\Yield1;
use App\Http\Controllers\csrf1;
use App\Http\Controllers\Tp_recuperer_donnees;
use App\Http\Controllers\selecte_1;
use App\Http\Controllers\tp1;
use App\Http\Controllers\Transaction1;

// Transaction1zh

use PhpParser\Node\Expr\FuncCall;

//Tp de les Sessions en utilise  Laravel :
Route::get("/tpAdmin/{user}/{pwd}", [tp1::class, "Afficher_Admin"]);

// Route::get("/afr", function () {
//     return view("Recuperation.caffichager2");
// });

// ------------
Route::get('/transaction', [Transaction1::class, "Transaction1"])->name("Transaction");
//------------
Route::get('/delete-data/{t}', [selecte_1::class, "Deletedata"])->name('delete-data');
Route::post('/delete-confirmed', [selecte_1::class, "DeleteConfirmed"])->name('delete-confirmed');


Route::get("/supprimer/{t}", [selecte_1::class, "Deletedata"]);
Route::get("/supprimer_module_Id/{t1}", [selecte_1::class, "Deletedata_module"]);


Route::get("/modifie/{c}", [selecte_1::class, "updateData"]);
Route::get("/modifie_module_Id/{c1}", [selecte_1::class, "updateData_module"]);


Route::post("/validationUp", [selecte_1::class, "validatemdf"])->name("validation1");
Route::post("/validationUp_model", [selecte_1::class, "validatemd_model"])->name("validation2");

// Route::get("/validationUp", [selecte_1::class, "validate_modification"])->name("validation1");

Route::get("/contactR2", [selecte_1::class, "getContact2"]);

Route::get("/RegisterP", [Yield1::class, "Afficher2M"])->name("login");

// ----------------
Route::post("/select2", [selecte_1::class, "storeData"])->name("registrement22");
Route::get("/select2", [selecte_1::class, "storeData"])->name("registrement22");

// recuperation des  donnees au niveau  de a bases  des donnees :
Route::get("/select1", [selecte_1::class, "getDataFromDB"]);
// Route::get("/select1", [selecte_1::class, "getDataFromDB"]);

//  Recuperation des  donnees  avec  l'utilistation de la  securite .-------------------------------------------------
// -------------------------------------------------
// -------------------------------------------------
Route::get("/tp_Afficher", function () {
    return view("Recuperation.Affichage");
});

// Afficher avec les  valeurs a recuperer selon l'etat  de formulaire: utlise la methode *** POST ***
Route::get("/tp_Afficher", [Tp_recuperer_donnees::class, "getData"])->name("RecupererDt");
// storeData
Route::post("/tp_Senddt", [Tp_recuperer_donnees::class, "storeData"])->name("Senddt");

// Route::post("/tp_Afficher", function () {
//     return view("Recuperation.Affichage");
// });

//Afficher la page de Registrement :
Route::get("/tp_Registrement", function () {
    return view("Recuperation.Registrement");
});
Route::post("/tp_Registrement", function () {
    return view("Recuperation.Registrement");
});
// Afficher la page Principale :
Route::get("/tp_home", function () {
    return view("Recuperation.Principale");
});
//Afficher la page de Contact :
// Route::get("/conR3", function () {
//     return view("Recuperation.contact");
// });
// Route::post("/conR3", function () {
//     return view("Recuperation.contact");
// });

// -------------------------------------------------
// -------------------------------------------------
// -------------------------------------------------


//Route  pour le CSRF -------------------------------------------------
Route::get("/csr1", [csrf1::class, "Afficher1"]);
// --------------------------------------------------------------
// Route::post("/R1", function () {
//     return view("CSRF1.HomeS");
//     // CSRF1.registrement
// });
Route::post("/R1", [Yield1::class, "AfficheHome1"]);
Route::get("/R1", function () {
    return view("Yield.Secondaire");
});
// --------------------------------------------------------------

// La Route concerent le Yield :
Route::get("/yld1", [Yield1::class, 'AfficherYield']);
// Exercice 1 -----------------------
Route::get("/yld2", [Yield1::class, 'AfficherYield1'])->middleware('user');
//----------------------------------- withe function :
// Route::get("/cr1", function (Request $request) {
//     return view("Tp1.accuel");
// })->middleware('age');
//-----------------------------------
//-----------------------------------
Route::get("/contact1", [Yield1::class, 'AffchierContact'])->middleware('nom');
//-----------------------------------
//-----------------------------------
// use  App\Http\Controllers\Controller1;
// /;/ first Route:
Route::get('/', function () {
    return view('welcome');
})->name('Zohair1');
//route a utilisation de View:
Route::view('/welc1', 'welcome');
// ------------------------------------
// ------------------------------------
// route  avec Id:
Route::view('/welco2', 'welcome', ['idR' => 100]);
// ------------------------------------
// ------------------------------------------------------------------------Middleware 
Route::get('Tp1', [controller3::class, 'etudiant'])->middleware('medl11');
// ------------------------------------
// ------------------------------------
// Le passage des donnees a la vue:
Route::get('s1', function () {
    return view('welcome', [
        'Nom1' => 'Zouhair',
        'BackEnd' => 'Python',
        'FrontEnd' => ['Html', 'Css', 'Bootstrap']
    ]);
});
// ------------------------------------
// ------------------------------------
// la methode REquest:--------------------------:

Route::get('qst/{n1}', function (Request $request) {
    return view('welcome', [
        'n1' => $request->n1
    ]);
});
// ------------------------------------
// ------------------------------------------------- 1:Request $request
Route::get('/qst1', function (Request $request) {
    // return view('Tp1Request.requeste1');
    return view('Tp1Request.requeste1', [
        'nom' => $request['nom']
        // au  niveu  de  url : /qst1?nom=zouhair
    ]);
});
// ------------------------------------
// ------------------------------------
route::get('/m', function () {
    echo 'P1';
})->name('Zouhair');
// ------------------------------------
// ------------------------------------
// le route rederiction:F
Route::redirect("/welc1", "/m");
// var_dump('Zouhair');
// Route::get('/', function () {
//     return view('welcome');
// })->name('Zohair1');
Route::get('m1', function () {
    echo 'F1';
})->name('Zohair2');
route::get('m2', function () {
    echo 'l1';
})->name('Zohair3');
// ------------------------------------
// ------------------------------------
//le route en Controleur:
Route::get("/Controller22", [controller2::class, 'test']);
// Route::get("/SommeS", [controller2::class, 'Somme']);
Route::get("/Somme/{n1}/{n2}", [controller2::class, 'Somme']);
Route::get("/Produit/{n1}/{n2}", [controller2::class, 'Produit']);

// ------------------------------------
// ------------------------------------
//------doit utilise la fleche suivant:" \" :
Route::get('/cnt1', [Controller::class, 'index()']);
// facon 2:
Route::get('/cnt2', 'App\Http\Controllers\Controller@testt')->name('Zohair6 ');
// Route::get('controleur2', 'App\Http\Controllers\Controller1')->name('Controleur');
// ------------------------------------
// ------------------------------------
// le controleur N:2
// Route::get('controleur22', ['App\Http\Controllers\Controller1', 'show'])->name('Controleur2');
// ------------------------------------
// ------------------------------------
//Deux facons pour appel de la view quelque soit au niveau de directe au Indirecte par le controlleur.
Route::get('/viewT2', function () {
    return view('home');
});
// ------------------------------------
// deuxieme facon:
Route::get('/viewM', [controller2::class, 'home1']);
// ------------------------------------
//route view  parametre:
Route::get('/viewP/{n1}', [controller2::class, 'homeR']);
// ------------------------------------
// ------------------------------------
// en  definie les cas facultatife et cas erreur a la fin de script Route:
// la route en parametre.
route::get('tst/{n}', function ($n) {
    return 'je suis la page ' . $n;
})->name('zouhair4');
// ------------------------------------
// ------------------------------------
//le route facultatif.
route::get('tst/{x?}', function ($x = 21) {
    return 'la page ' . $x;
})->name('Zohair5');
