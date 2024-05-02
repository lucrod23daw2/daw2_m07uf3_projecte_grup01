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
        <form method="post" action="{{ route('autos.update', $dades_auto->matricula_auto) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
                <label for="matricula_auto">Matricula</label>
                <input type="text" class="form-control" name="matricula_auto" value="{{ $dades_auto->matricula_auto }}"/>
            </div>
            <div class="form-group">           
                <label for="num_bastidor">Número de Bastidor</label>
                <input type="text" class="form-control" name="num_bastidor" value="{{ $dades_auto->num_bastidor }}"/>
            </div>
            <div class="form-group">           
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" value="{{ $dades_auto->marca }}"/>
            </div>
            <div class="form-group">           
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" value="{{ $dades_auto->model }}"/>
            </div>
            <div class="form-group">           
                <label for="color">Color</label>
                <input type="text" class="form-control" name="color" value="{{ $dades_auto->color }}"/>
            </div>        
            <div class="form-group">
                <label for="places">Nº de Places</label>
                <input type="int" class="form-control" name="places" value="{{ $dades_auto->places }}"/>
            </div>
            <div class="form-group">
                <label for="portes">Nº de Portes</label>
                <input type="int" class="form-control" name="portes" value="{{ $dades_auto->portes }}"/>
            </div>
            <div class="form-group">
                <label for="gran_maleter">Mides Maleter</label>
                <input type="text" class="form-control" name="gran_maleter" value="{{ $dades_auto->gran_maleter }}"/>
            </div>
            <div class="form-group">           
                <label for="combustible">Tipus de Combustible</label>
                <select name="combustible">
                    <option value="gasolina" {{ $dades_auto->combustible == "gasolina" ? 'selected' : ''}}>Gasolina</option>
                    <option value="diesel" {{ $dades_auto->combustible == "diesel" ? 'selected' : ''}}>Diesel</option>	
                    <option value="electric" {{ $dades_auto->combustible == "electric" ? 'selected' : ''}}>Elèctric</option>		    
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>    
    </div>
</div>
<br><a href="{{ url('autos') }}">Torna a la llista d'autos</a
@endsection