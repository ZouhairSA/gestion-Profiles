@extends('Recuperation.Principale')
@section('modifierr')
    <div class="registre2t">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Inscription</h2>
                <form action="/validationUp_model" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <h3>Modifie votre inforamtion :</h3>

                        {{-- yield====================== --}}
                        {{-- @yield('confiremerSupprission') --}}
                        {{-- yield====================== --}}

                        <label for="id_student">ID_Module :</label>
                        <input type="text" class="form-control" id="id_module" name="id_module"
                            value="{{ $module[0]->id_module }}">

                        {{-- <br> --}}

                    </div>
                    <div class="form-group">
                        <label for="name_student">Nom module :</label>
                        <input type="text" class="form-control" id="" name="nom_module"
                            value="{{ $module[0]->nom_module }}">

                    </div>

                    <div class="form-group">
                        <label for="lastename_student">specialite</label>
                        <input type="text" class="form-control" id="specialite" name="specialite"
                            value="{{ $module[0]->specialite }}">

                    </div>

                    {{-- <button type="submit" class="btn btn-primary" value="Modifie">Modifie</button>
                     --}}
                    <input type="submit" value="Modifier" class="btn btn-primary">
                    <a href="/contactR2" class="btn btn-primary cancel">Back</a>
                    {{-- <a href="/contactR2" class="btn btn-primary cancel">Back</a> --}}

                    {{-- <br />
                    <br />
                    @error('nom')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br />
                    <br />
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br />

                    <br /> --}}

                </form>
            </div>
        </div>
    </div>
@endsection
