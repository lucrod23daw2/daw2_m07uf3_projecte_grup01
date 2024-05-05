<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloga;

class ControladorLloga extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_lloguers = Lloga::all();
        return view('llistalloguers', compact('dades_lloguers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crealloguer');
    }
    
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'dni_client' => 'required',
            'matricula_auto' => 'required',
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'retorn_deposit_ple' => 'required',
            'asseguranca' => 'required',
        ]);
        $Lloguer = Lloga::create($nouLloguer);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni_client, string $matricula_auto)
    {
        $lloguer = Lloga::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        return view('mostralloguer', compact('lloguer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni_client, string $matricula_auto)
    {
        $lloguer = Lloga::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        return view('actualitzalloguer', compact('lloguer'));
    }

    public function update(Request $request, string $dni_client, string $matricula_auto)
    {
        $noves_dades_lloguer=$request->validate([
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'retorn_deposit_ple' => 'required',
            'asseguranca' => 'required',
        ]);
        $lloguer = Lloga::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        $lloguer->update($noves_dades_lloguer);
        return view('dashboard');
    }

    /**
     * Elimina el registro de alquiler especificado de la base de datos.
     */
    public function destroy(string $dni_client, string $matricula_auto)
    {
        $lloguer = Lloga::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        $lloguer->delete();
        return view('dashboard');
    }
}
