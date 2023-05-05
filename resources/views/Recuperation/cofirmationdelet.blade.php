@extends('Recuperation.Principale')
{{-- @extends('Recuperation.Principale') --}}
@section('confiremerSupprission1')
    <h2 class="title">Confirmer la suppression</h2>

    <h3 class="message">Voulez-vous vraiment supprimer les données pour l'étudiant avec l'ID {{ $id_student }}?</h3>

    <form method="POST" action="{{ route('delete-confirmed') }}" class="form">

        @csrf
        <input type="hidden" name="id_student" value="{{ $id_student }}">
        <button type="submit" class="btn btn-danger confirm">Oui, supprimer</button> |
        <a href="/contactR2" class="btn btn-primary cancel">Non, annuler</a>

    </form>
@endsection
