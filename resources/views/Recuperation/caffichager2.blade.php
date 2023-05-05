@extends('Recuperation.Principale')
@section('contactR')
    <div class="container">
        {{-- @csrf --}}
        @if (count($modulesr) > 0)
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
                    @foreach ($reservations as $info)
                        <tr>
                            <td>{{ $info->id_student }}</td>
                            <td>{{ $info->name_student }}</td>
                            <td>{{ $info->lastename_student }}</td>
                            <td>
                                <a href="/modifie/{{ $info->id_student }}" class="btn btn-primary">Modifier</a> |
                                <a href="/supprimer/{{ $info->id_student }}" class="btn btn-danger">Supprimer</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>votre tableau student est vide </h2>
        @endif
    </div>
@endsection
