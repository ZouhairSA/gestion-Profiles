@extends('Recuperation.Principale')
@section('modifierr')
    <div class="registre2t">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Inscription</h2>
                {{-- Action  simple avec le nom  de la route c'est la methode classique  --}}
                {{-- <form action="/tp_Afficher" method="POST"> --}}

                {{-- aen  utilise le nom  de la route  dans le Action F --}
                {{-- <form action="{{ route('RecupererDt') }}" method="POST"> --}}
                <form action="/validationUp" method="POST">

                    {{-- 1 : --}}
                    @csrf
                    {{-- @method('put') --}}

                    {{-- 2 : --}}
                    {{-- {{ csrf_field() }} --}}
                    {{-- 3: --}}
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                    <div class="form-group">
                        <h3>Modifie votre inforamtion :</h3>

                        {{-- yield====================== --}}
                        {{-- @yield('confiremerSupprission') --}}
                        {{-- yield====================== --}}

                        <label for="id_student">ID_Student :</label>
                        <input type="text" class="form-control" id="id_student" name="id_student"
                            value="{{ $module[0]->id_student }}">

                        {{-- <br> --}}

                    </div>
                    <div class="form-group">
                        <label for="name_student">Name_Student :</label>
                        <input type="text" class="form-control" id="name_student" name="name_student"
                        
                            value="{{ $module[0]->name_student }}">

                        {{-- <br> --}}
                        {{-- @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="lastename_student">Lastname_Student :</label>
                        <input type="text" class="form-control" id="lastename_student" name="lastename_student"
                            value="{{ $module[0]->lastename_student }}">
                        {{-- <br /> --}}
                        {{-- @error('prenom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>

                    {{-- <button type="submit" class="btn btn-primary" value="Modifie">Modifie</button>
                     --}}
                    <input type="submit" value="Modifier" class="btn btn-primary">
                    <a href="/contactR2" class="btn btn-primary cancel">Back</a>
                    <a href="/contactR2" class="btn btn-primary cancel">Back</a>

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
