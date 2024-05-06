@extends('disseny')
@section('content')
<h1>Llista de lloguers</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Dni</td>
 <td>Matricula</td>
 <td>Accions</td>
 </tr>
 </thead>
 <tbody>
    @foreach($dades_lloguers as $lloguer)
    <tr>
        <td>{{$lloguer->dni_client}}</td>
        <td>{{$lloguer->matricula_auto}}</td>
        <td class="text-left">
        <a href="{{ route('lloguers.edit', $lloguer->matricula_auto)}}" class="btn btn-primary btn-sm">Edita</a>
        <a href="{{ route('lloguers.show', $lloguer->matricula_auto)}}" class="btn btn-info btn-sm">Mostra</a>
        <a href="{{ route('lloguers.pdf', $lloguer->matricula_auto)}}" class="btn btn-secondary btn-sm">PDF</a>
        <form action="{{ route('lloguers.destroy', $lloguer->matricula_auto)}}" method="post" style="display: inline-block">
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
