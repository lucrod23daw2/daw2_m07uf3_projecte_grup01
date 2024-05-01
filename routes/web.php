<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorAuto;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('inici');
    });

Route::resource('autos', ControladorAuto::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*use App\Models\Auto;

Route::post('/afegirAuto', function () {
    $dades= array("matricula_auto" => "2345KJL",
    "num_bastidor" => "KN34567890123456",
    "marca" => "Seat",
    "model" => "Ibiza",
    "color" => "Rojo",
    "places" => "5",
    "portes" => "5",
    "gran_maleter" => "150x230cm",
    "combustible" => "gasolina");
    
    Auto::create($dades);
});*/