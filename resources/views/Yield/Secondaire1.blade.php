@extends('Yield.princ')
{{-- @extends('Yield.Secondaire') --}}
@section('S1')
    <link rel="stylesheet" href="css/app1.css">
    <table border="2px">
        <tr>
            <th>Langues</th>
            <th>Niveau</th>
            <th>Time</th>
        </tr>
        <tr>
            <td>PHP</td>
            <td>*****</td>
            <td>120 HR</td>
        </tr>
        <tr>
            <td>PYHTON</td>
            <td>****</td>
            <td>120HR</td>
        </tr>
        <tr>
            <td>JAVASCRIPT</td>
            <td>*****</td>
            <td>120</td>
        </tr>
        <tr>
            <td>SQL</td>
            <td>*****</td>
            <td>90</td>
        </tr>
    </table>
    <p>
        the Seconde table :
    </p>
    @yield('S2')
@endsection
