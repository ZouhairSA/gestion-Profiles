@extends('Recuperation.Principale')
@section('contact')
    <div class="container">
        {{-- @csrf --}}
        @if (count($moduless) > 0)
            <h2>Table : M O D E L </h2>
            <table class="table">

                <thead>
                    <tr>
                        <th>Id_module</th>
                        <th>Nom_Module</th>
                        <th>Specialite</th>
                        <th>Tache</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moduless as $info)
                        {{--  le  premiere est un tableau vide  --}}
                        {{-- <tr>
                            <td>{{ $info->id_teacher }}</td>
                            <td>{{ $info->nom_teacher }}</td>
                            <td>{{ $info->prenom_teacher }}</td>
                        </tr> --}}

                        {{-- le deuxieme tableau est contient des valeurs --}}

                        <tr>
                            <td>{{ $info->id_module }}</td>
                            <td>{{ $info->nom_module }}</td>
                            <td>{{ $info->specialite }}</td>
                            <td>
                                <a href="/modifie_module_Id/{{ $info->id_module }}" class="btn btn-primary">Modifier</a> |
                                <a href="/supprimer_module_Id/{{ $info->id_module }}" class="btn btn-danger">Supprimer</a>
                                <a href="/supprimer_module_Id/{{ $info->id_module }}" class="btn btn-danger">Supprimer</a>

                                {{-- <a href="" class="btn btn-primary">Modifier</a> |
                                <a href="" class="btn btn-danger">Supprimer</a>F --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>votre tableau module est vide </h2>
        @endif

        {{-- j'ai  change  le chemain  vers  la page CAFFIGER2 --}}
        {{-- @if (count($modulesr) > 0)
            <h2>Table : S T U D E N T</h2>
            <table class="table">

                <thead>
                    <tr>
                        <th>Id student</th>
                        <th>Name student</th>
                        <th>Lastename student</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modulesr as $info)
                        <tr>
                            <td>{{ $info->id_student }}</td>
                            <td>{{ $info->name_student }}</td>
                            <td>{{ $info->lastename_student }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Modifier</a> |
                                <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>votre tableau student est vide </h2>
        @endif --}}
    </div>
@endsection
