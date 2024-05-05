@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Client
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
    <form method="post" action="/clients">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="dni_client">DNI</label>
            <input type="text" class="form-control" name="dni_client"/>
        </div>
        <div class="form-group">           
            <label for="nom_cognoms">Nom i Cognoms</label>
            <input type="text" class="form-control" name="nom_cognoms"/>
        </div>
        <div class="form-group">           
            <label for="edat">Edat</label>
            <input type="number" class="form-control" name="edat"/>
        </div>
        <div class="form-group">           
            <label for="telefon">Telefon</label>
            <input type="text" class="form-control" name="telefon"/>
        </div>
        <div class="form-group">           
            <label for="adreca">Adreça</label>
            <input type="text" class="form-control" name="adreca"/>
        </div>
        <div class="form-group">           
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat"/>
        </div>
        <div class="form-group">           
            <label for="pais">Pais</label>
            <input type="text" class="form-control" name="pais"/>
        </div>        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            <label for="num_permis_conduccio">Numero permís de conducció</label>
            <input type="text" class="form-control" name="num_permis_conduccio"/>
        </div>
        <div class="form-group">           
            <label for="punts_permis_conduccio">Punts del permis</label>
            <input type="num" class="form-control" name="punts_permis_conduccio"/>
        </div>
        <div class="form-group">           
            <label for="tipus_targeta">Tipus targeta</label>
            <select name="tipus_targeta">
			    <option value="Dèbit">Dèbit</option>
                <option value="Crèdit">Crèdit</option>	  	    
		    </select>        
        </div>
        <div class="form-group">           
            <label for="num_targeta">Numero targeta</label>
            <input type="text" class="form-control" name="num_targeta"/>            
        </div>
             
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
@endsection