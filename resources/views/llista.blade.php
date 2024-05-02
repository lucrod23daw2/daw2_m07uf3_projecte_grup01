@extends('disseny')
@section('content')
<h1>Llista d'automòbils</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Matricula</td>
 <td>Marca</td>
 <td>Model</td>
 <td>Accions</td>
 </tr>
 </thead>
 <tbody>
 @foreach($dades_autos as $auto)
 <tr>
 <td>{{$auto->matricula_auto}}</td>
 <td>{{$auto->marca}}</td>
 <td>{{$auto->model}}</td>
 <td class="text-left">
    <a href="{{ route('autos.edit', $auto->matricula_auto)}}" class="btn btn-primary btn-sm">Edita</a>
    <a href="{{ route('autos.show', $auto->matricula_auto)}}" class="btn btn-info btn-sm">Mostra</a>
    <a href="{{ route('autos.show', $auto->matricula_auto)}}" class="btn btn-secondary btn-sm">PDF</a>
    <form action="{{ route('autos.destroy', $auto->matricula_auto)}}" method="post" style="display: inline-block">
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
