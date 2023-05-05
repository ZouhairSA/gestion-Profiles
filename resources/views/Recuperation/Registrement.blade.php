@extends('Recuperation.Principale')
@section('registrement')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Inscription</h2>
                {{-- Action  simple avec le nom  de la route c'est la methode classique  --}}
                {{-- <form action="/tp_Afficher" method="POST"> --}}

                {{-- aen  utilise le nom  de la route  dans le Action F --}}
                <form action="{{ route('RecupererDt') }}" method="GET">
                    {{-- 1 : --}}
                    {{-- @csrf --}}
                    {{-- 2 : --}}
                    {{-- {{ csrf_field() }} --}}
                    {{-- 3: --}}
                    {{-- <input type=s"hidden" name="_token" value="{{ csrf_token() }}"> --}}

                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                        {{-- <br> --}}
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        {{-- <br /> --}}
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        {{-- <br /> --}}
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    
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
