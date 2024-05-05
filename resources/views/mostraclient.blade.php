@extends('disseny')
@section('content')
<h1>Dades del Client</h1>
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
			<td>Dni Client</td>
			<td>{{$dades_client->dni_client}}</td>
		</tr>
		<tr>
			<td>Nom i cognoms</td>
			<td>{{$dades_client->nom_cognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$dades_client->edat}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_client->adreca}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_client->ciutat}}</td>
		</tr>
		<tr>
			<td>Pais</td>
			<td>{{$dades_client->pais}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_client->email}}</td>
		</tr>
		<tr>
			<td>Numero de Permis</td>
			<td>{{$dades_client->num_permis_conduccio}}</td>
		</tr>
		<tr>
			<td>Punts de Permis</td>
			<td>{{$dades_client->punts_permis_conduccio}}</td>
		</tr>
        <tr>
			<td>Tipus Tarjeta</td>
			<td>{{$dades_client->tipus_targeta}}</td>
		</tr>
        <tr>
			<td>Numero Tarjeta</td>
			<td>{{$dades_client->num_targeta}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('clients') }}">Torna a la llista de clients<a/>
  </div>
<div>
@endsection