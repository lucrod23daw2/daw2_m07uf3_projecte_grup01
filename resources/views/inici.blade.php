<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Empresa</title>
</head>
<body>
<div><b>Pàgina inicial de l'aplicació web RentByRent</b></div>
<div>Benvingut a RentByRent, la teva pagina de confiaça de lloguer de cotxes.</div>
@if (Route::has('login'))
@auth
<a href="{{ url('/dashboard') }}">Dashboard</a>
@else
<a href="{{ route('login') }}">Log in</a><br>
@endauth
@endif
</body>
</html>