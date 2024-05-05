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
    <form method="post" action="/lloguers">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="dni_client">DNI</label>
            <input type="text" class="form-control" name="dni_client"/>
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="data_prestec">Data prestec</label>
            <input type="date" class="form-control" name="data_prestec"/>
        </div>
        <div class="form-group">           
            <label for="data_devolucio">Data devolucio</label>
            <input type="date" class="form-control" name="data_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="lloc_devolucio">Lloc devolucio</label>
            <input type="date" class="form-control" name="lloc_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="preu_per_dia">Preu per dia</label>
            <input type="text" class="form-control" name="preu_per_dia"/>
        </div>        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            <label for="retorn_deposit_ple">Retorn deposit ple</label>
            <input type="text" class="form-control" name="retorn_deposit_ple"/>
        </div>
        <div class="form-group">           
            <label for="punts_del_permis">Punts del permis</label>
            <input type="number" class="form-control" name="punts_del_permis"/>
        </div>
        <div class="form-group">           
            <label for="tipus_targeta">Tipus targeta</label>
            <input type="text" class="form-control" name="tipus_targeta"/>
        </div>
        <div class="form-group">           
            <label for="asseguranca">Asseguranca</label>
            <input type="number" class="form-control" name="asseguranca"/>            
        </div>
             
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
@endsection