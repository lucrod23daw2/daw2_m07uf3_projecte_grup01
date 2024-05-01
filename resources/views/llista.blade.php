@extends('disseny')
@section('content')
<h1>Llista d'automòbils</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Matricula</td>
 <td>Número bastidor</td>
 <td>Marca</td>
 <td>Model</td>
 <td>Color</td>
 <td>Places</td>
 <td>Portes</td>
 <td>Mides maleter</td>
 <td>Combustible</td>
 </tr>
 </thead>
 <tbody>
 @foreach($dades_autos as $autos)
 <tr>
 <td>{{$autos->matricula_auto}}</td>
 <td>{{$autos->num_bastidor}}</td>
 <td>{{$autos->marca}}</td>
 <td>{{$autos->model}}</td>
 <td>{{$autos->color}}</td>
 <td>{{$autos->places}}</td>
 <td>{{$autos->portes}}</td>
 <td>{{$autos->gran_maleter}}</td>
 <td>{{$autos->combustible}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
<div>
@endsection
