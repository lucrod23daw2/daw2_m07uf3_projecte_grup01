<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_client = Client::all();
        return view('llistaclients', compact('dades_client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaclient');
    }

    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dni_client' => 'required',
            'nom_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreca' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'num_permis_conduccio' => 'required',
            'punts_permis_conduccio' => 'required',
            'tipus_targeta' => 'required',
            'num_targeta' => 'required',
        ]);
        
        $client = Client::create($nouClient);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni_client)
    {
        $dades_client = Client::findOrFail($dni_client);
        return view('mostraclient',compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni_client)
    {
        $dades_client = Client::findOrFail($dni_client);
        return view('actualitzaclient',compact('dades_client'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, string $dni_client)
    {
        $noves_dades_client = $request->validate([
            'dni_client' => 'required',
            'nom_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreca' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'num_permis_conduccio' => 'required',
            'punts_permis_conduccio' => 'required',
            'tipus_targeta' => 'required',
            'num_targeta' => 'required',
        ]);
        
        Client::findOrFail($dni_client)->update($noves_dades_client);
        return view('dashboard');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(string $dni_client)
    {
        $client = Client::findOrFail($dni_client)->delete();
        return view('dashboard');
    }
}
