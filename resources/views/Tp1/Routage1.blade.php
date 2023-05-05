<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border: 2px solid black;

        }
    </style>
</head>

<body>
    <p>Votre Infos</p>
    <table border="2px">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nom </td>
            <td>{{ $nom }}</td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td>{{ $prenom }}</td>
        </tr>
        <tr>
            <td>Poste</td>
            <td>{{ $postee }}</td>
        </tr>
        <tr>
            <td>Poste</td>
            <td>
                <ul>
                    @foreach ($module as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <p>les nombres Pairs</p>
            </td>
            <td>
                <select>
                    @for ($i = 0; $i < 1000; $i++)
                        @if ($i % 2 == 0)
                            <option>{{ $i }}</option>
                        @endif
                    @endfor
                </select>
            </td>
        </tr>
        <tr>
            <td>
                {{-- <p>les nombres Impairs</p> --}}
            </td>
            <td>
                <select>
                    @for ($i = 0; $i < 1000; $i++)
                        @if ($i % 2 == 1)
                            <option>{{ $i }}</option>
                        @endif
                    @endfor
                </select>
            </td>
        </tr>
    </table>
    <div>
        {{-- <p>les nombres Pairs</p>
        <select>
            @for ($i = 0; $i < 1000; $i++)
                @if ($i % 2 == 0)
                    <option>{{ $i }}</option>
                @endif
            @endfor
        </select>
        <p>les nombres Impairs</p>
        <select>
            @for ($i = 0; $i < 1000; $i++)
                @if ($i % 2 == 1)
                    <option>{{ $i }}</option>
                @endif
            @endfor
        </select> --}}
    </div>
</body>

</html>
