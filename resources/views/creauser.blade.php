@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Usuari
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
    <form method="post" action="/users">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">           
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="password">Contrasenya</label>
            <input type="password" class="form-control" name="password"/>
        </div>
        <div class="form-group">           
            <label for="tipus">Tipus</label>
            <select name="tipus">
			    <option value="treballador">Treballador</option>
                <option value="cap de departament">Cap de departament</option>	  	    
		    </select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
@endsection