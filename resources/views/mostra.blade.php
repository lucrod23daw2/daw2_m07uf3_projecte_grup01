@extends('disseny')
@section('content')
<h1>Dades del auto</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>Matricula</td>
			<td>{{$dades_auto->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Número de Bastidor</td>
			<td>{{$dades_auto->num_bastidor}}</td>
		</tr>
		<tr>
			<td>Marca</td>
			<td>{{$dades_auto->marca}}</td>
		</tr>
		<tr>
			<td>Model</td>
			<td>{{$dades_auto->model}}</td>
		</tr>
		<tr>
			<td>Color</td>
			<td>{{$dades_auto->color}}</td>
		</tr>
		<tr>
			<td>Nº de Places</td>
			<td>{{$dades_auto->places}}</td>
		</tr>
		<tr>
			<td>Nº de Portes</td>
			<td>{{$dades_auto->portes}}</td>
		</tr>
		<tr>
			<td>Mides Maleter</td>
			<td>{{$dades_auto->gran_maleter}}</td>
		</tr>
		<tr>
			<td>Tipus de Combustible</td>
			<td>{{$dades_auto->combustible}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('autos') }}">Torna a la llista d'autos<a/>
  </div>
<div>
@endsection