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
        <form method="post" action="{{ route('lloguers.update', $dades_lloguer->dni_client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
            <label for="dni_client">DNI</label>
            <input type="text" class="form-control" name="dni_client" value="{{ $dades_lloguer->dni_client}}"/>
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="matricula_auto" value="{{ $dades_lloguer->matricula_auto}}"/>
        </div>
        <div class="form-group">           
            <label for="data_prestec">Data prestec</label>
            <input type="date" class="form-control" name="data_prestec" value="{{ $dades_lloguer->data_prestec}}"/>
        </div>
        <div class="form-group">           
            <label for="data_devolucio">Data devolucio</label>
            <input type="date" class="form-control" name="data_devolucio" value="{{ $dades_lloguer->data_devolucio}}"/>
        </div>
        <div class="form-group">           
            <label for="lloc_devolucio">Lloc devolucio</label>
            <input type="string" class="form-control" name="lloc_devolucio" value="{{ $dades_lloguer->lloc_devolucio}}"/>
        </div>
        <div class="form-group">           
            <label for="preu_per_dia">Preu per dia</label>
            <input type="float" class="form-control" name="preu_per_dia" value="{{ $dades_lloguer->preu_per_dia}}"/>
        </div>        
        <div class="form-group">
            <label for="retorn_deposit_ple">Retorn amb deposit ple</label>
            <select name="retorn_deposit_ple">
			    <option value="1" {{ $dades_lloguer->retorn_deposit_ple == "1" ? 'selected' : ''}}>Sí</option>
                <option value="0" {{ $dades_lloguer->retorn_deposit_ple == "0" ? 'selected' : ''}}>No</option>
            </select>
        </div>
        <div class="form-group">           
            <label for="asseguranca">Asseguranca</label>
            <select name="asseguranca">
			    <option value="Franquicia fin 1000€" {{ $dades_lloguer->asseguranca == "Franquicia fin 1000€" ? 'selected' : ''}}>Franquicia fin 1000€</option>
                <option value="Franquicia fin 500€" {{ $dades_lloguer->asseguranca == "Franquicia fin 500€" ? 'selected' : ''}}>Franquicia fin 500€</option>
                <option value="Sense franquicia" {{ $dades_lloguer->asseguranca == "Sense franquicia" ? 'selected' : ''}}>Sense franquicia</option>	  	    
            </select>
        </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>    
    </div>
</div>
<br><a href="{{ url('lloguers') }}">Torna a la llista de lloguers</a
@endsection