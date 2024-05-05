@extends('disseny')
@section('content')
<h1>Llista Clients</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>DNI</td>
 <td>Nom i Cognoms</td>
 <td>Telefon</td>
 <td>Accions</td>
 </tr>
 </thead>
 <tbody>
    @foreach($dades_client as $client)
    <tr>
    <td>{{$client->dni_client}}</td>
    <td>{{$client->nom_cognoms}}</td>
    <td>{{$client->telefon}}</td>
    <td class="text-left">
        <a href="{{ route('clients.edit', $client->dni_client)}}" class="btn btn-primary btn-sm">Edita</a>
        <a href="{{ route('clients.show', $client->dni_client)}}" class="btn btn-info btn-sm">Mostra</a>
        <a href="{{ route('clients.pdf', $client->dni_client)}}" class="btn btn-secondary btn-sm">PDF</a>
        <form action="{{ route('clients.destroy', $client->dni_client)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">
                Esborra
            </button>
        </form>
    </td>
    </tr>
    @endforeach
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection
