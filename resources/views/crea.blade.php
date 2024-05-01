@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou auto
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
    <form method="post" action="/autos">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="num_bastidor">Número de Bastidor</label>
            <input type="text" class="form-control" name="num_bastidor"/>
        </div>
        <div class="form-group">           
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca"/>
        </div>
        <div class="form-group">           
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model"/>
        </div>
        <div class="form-group">           
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color"/>
        </div>        
        <div class="form-group">
            <label for="places">Nº de Places</label>
            <input type="int" class="form-control" name="places"/>
        </div>
        <div class="form-group">
            <label for="portes">Nº de Portes</label>
            <input type="int" class="form-control" name="portes"/>
        </div>
        <div class="form-group">
            <label for="gran_maleter">Mides Maleter</label>
            <input type="text" class="form-control" name="gran_maleter"/>
        </div>
        <div class="form-group">           
            <label for="combustible">Tipus de Combustible</label>
            <select name="combustible">
			    <option value="gasolina">Gasolina</option>
			    <option value="diesel">Diesel</option>	
                <option value="electric">Elèctric</option>		    
			</select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection