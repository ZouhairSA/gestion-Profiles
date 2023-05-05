@extends('Recuperation.Principale')
@section('affiche')
    <p>hello Zohair </p>
    <div class="container">
        <h1>Formulaire d'informations personnelles</h1>
        <form method="POST" action="tp_Registrement">
            @csrf
            <div class="form-group">
                {{-- {{ $nom }} {{ $password }} {{ $email }} --}}
                <label for="nom">Nom : {{ $nom }}</label>
                {{-- <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom"> --}}
            </div>
            <div class="form-group">
                <label for="prenom">Password : {{ $password }}</label>
                {{-- <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom"> --}}
            </div>
            <div class="form-group">
                <label for="email">Adresse email :{{ $email }}</label>
                {{-- <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email"> --}}
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone : 07*********</label>
                {{-- <input type="tel" class="form-control" id="telephone" placeholder="Entrez votre numéro de téléphone"> --}}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Enregistrer</button>
                <button type="button" class="btn btn-primary">Modifie Infos</button>
            </div>
            {{-- <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form> --}}
    </div>
@endsection
