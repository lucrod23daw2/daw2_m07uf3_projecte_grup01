<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorAuto;
use App\Http\Controllers\ControladorClient;
use App\Http\Controllers\ControladorLloga;
use App\Http\Controllers\ControladorUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inici');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })->name('dashboard-basic');
    Route::get('/clients/{dni_client}/pdf', [ControladorClient::class, 'pdf'])->name('clients.pdf');
    Route::get('/autos/{matricula_auto}/pdf', [ControladorAuto::class, 'pdf'])->name('autos.pdf');
    Route::get('/lloguers/{matricula_auto}/pdf', [ControladorLloga::class, 'pdf'])->name('lloguers.pdf');
    Route::get('/users/{email}/pdf', [ControladorUser::class, 'pdf'])->name('users.pdf');
    Route::resource('clients', ControladorClient::class);
    Route::resource('autos', ControladorAuto::class);
    Route::resource('lloguers', ControladorLloga::class);
    Route::resource('users', ControladorUser::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';