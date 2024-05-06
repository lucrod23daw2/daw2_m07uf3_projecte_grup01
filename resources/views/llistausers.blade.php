@extends('disseny')
@section('content')
<h1>Llista usuaris</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Nom</td>
 <td>Email</td>
 <td>Tipus</td>
 <td>Accions</td>
 </tr>
 </thead>
 <tbody>
    @foreach($dades_user as $user)
    <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->tipus}}</td>
    <td class="text-left">
        <a href="{{ route('users.edit', $user->email)}}" class="btn btn-primary btn-sm">Edita</a>
        <a href="{{ route('users.show', $user->email)}}" class="btn btn-info btn-sm">Mostra</a>
        <a href="{{ route('users.pdf', $user->email)}}" class="btn btn-secondary btn-sm">PDF</a>
        <form action="{{ route('users.destroy', $user->email)}}" method="post" style="display: inline-block">
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
