@extends('disseny')
@section('content')
<h1>Dades del Lloguer</h1>
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
			<td>{{$dades_lloguer->dni_client}}</td>
		</tr>
		<tr>
			<td>Matricula auto</td>
			<td>{{$dades_lloguer->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Data de prèstec</td>
			<td>{{$dades_lloguer->data_prestec}}</td>
		</tr>
		<tr>
			<td>Data de devolució</td>
			<td>{{$dades_lloguer->data_devolucio}}</td>
		</tr>
		<tr>
			<td>Lloc de devolució</td>
			<td>{{$dades_lloguer->lloc_devolucio}}</td>
		</tr>
		<tr>
			<td>Preu per dia</td>
			<td>{{$dades_lloguer->preu_per_dia}}</td>
		</tr>
		<tr>
			<td>Deposit ple al retornar</td>
			<td>{{$dades_lloguer->retorn_deposit_ple}}</td>
		</tr>
		<tr>
			<td>Assegurança</td>
			<td>{{$dades_lloguer->asseguranca}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('lloguers') }}">Torna a la llista de lloguers<a/>
  </div>
<div>
@endsection