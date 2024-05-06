@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('clients.update', $dades_user->dni_client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" value="{{ $dades_user->name }}"/>
            </div>
            <div class="form-group">           
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $dades_user->email }}"/>
            </div>
            <div class="form-group">           
                <label for="password">Contrasenya</label>
                <input type="password" class="form-control" name="password" value="{{ $dades_user->password }}"/>
            </div>
            <div class="form-group">           
                <label for="tipus">Tipus</label>
                <select name="tipus">
                    <option value="treballador" {{ $dades_user->tipus == "Treballador" ? 'selected' : ''}}>Treballador</option>
                    <option value="cap de departament" {{ $dades_user->tipus == "Cap de departament" ? 'selected' : ''}}>Cap de departament</option>	  	    
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>    
    </div>
</div>
<br><a href="{{ url('clients') }}">Torna a la llista de clients</a
@endsection