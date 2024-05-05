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
        <form method="post" action="{{ route('clients.update', $dades_client->dni_client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
            <label for="dni_client">DNI</label>
            <input type="text" class="form-control" name="dni_client" value="{{ $dades_client->dni_client }}"/>
        </div>
        <div class="form-group">           
            <label for="nom_cognoms">Nom i Cognoms</label>
            <input type="text" class="form-control" name="nom_cognoms" value="{{ $dades_client->nom_cognoms }}"/>
        </div>
        <div class="form-group">           
            <label for="edat">Edat</label>
            <input type="number" class="form-control" name="edat" value="{{ $dades_client->edat }}"/>
        </div>
        <div class="form-group">           
            <label for="telefon">Telefon</label>
            <input type="text" class="form-control" name="telefon" value="{{ $dades_client->telefon }}"/>
        </div>
        <div class="form-group">           
            <label for="adreca">Adreça</label>
            <input type="text" class="form-control" name="adreca" value="{{ $dades_client->adreca }}"/>
        </div>
        <div class="form-group">           
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat" value="{{ $dades_client->ciutat }}"/>
        </div>
        <div class="form-group">           
            <label for="pais">Pais</label>
            <input type="text" class="form-control" name="pais" value="{{ $dades_client->pais }}"/>
        </div>        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $dades_client->email }}"/>
        </div>
        <div class="form-group">
            <label for="num_permis_conduccio">Numero permís de conducció</label>
            <input type="text" class="form-control" name="num_permis_conduccio" value="{{ $dades_client->num_permis_conduccio }}"/>
        </div>
        <div class="form-group">           
            <label for="punts_permis_conduccio">Punts del permis</label>
            <input type="num" class="form-control" name="punts_permis_conduccio" value="{{ $dades_client->punts_permis_conduccio }}"/>
        </div>
        <div class="form-group">           
            <label for="tipus_targeta">Tipus targeta</label>
            <select name="tipus_targeta">
			    <option value="Dèbit" {{ $dades_client->tipus_targeta == "debit" ? 'selected' : ''}}>Dèbit</option>
                <option value="Crèdit" {{ $dades_client->tipus_targeta == "credit" ? 'selected' : ''}}>Crèdit</option>	  	    
		    </select>        
        </div>
        <div class="form-group">           
            <label for="num_targeta">Numero targeta</label>
            <input type="text" class="form-control" name="num_targeta" value="{{ $dades_client->num_targeta }}"/>            
        </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>    
    </div>
</div>
<br><a href="{{ url('autos') }}">Torna a la llista d'autos</a
@endsection