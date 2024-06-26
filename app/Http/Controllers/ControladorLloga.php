<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloga;
use App\Models\Auto;
use App\Models\Client;
use Dompdf\Dompdf;
use Dompdf\Options;

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
            'dni_client' => 'required|exists:clients,dni_client',
            'matricula_auto' => 'required|exists:autos,matricula_auto',
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'retorn_deposit_ple' => 'required',
            'asseguranca' => 'required',
        ]);
        $lloguer = Lloga::create($nouLloguer);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $matricula_auto)
    {
        $dades_lloguer = Lloga::findOrFail($matricula_auto);
        $auto = Auto::where('matricula_auto', $matricula_auto)->firstOrFail();

        return view('mostralloguers', compact('dades_lloguer', 'auto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $matricula_auto)
    {
        $dades_lloguer = Lloga::findOrFail($matricula_auto);
        return view('actualitzalloguer', compact('dades_lloguer'));
    }

    public function update(Request $request, string $matricula_auto)
    {
        $noves_dades_lloguer = $request->validate([
            'dni_client' => 'required|exists:clients,dni_client',
            'matricula_auto' => 'required|exists:autos,matricula_auto',
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'retorn_deposit_ple' => 'required',
            'asseguranca' => 'required',
        ]);
        $lloguer = Lloga::findOrFail($matricula_auto)->update($noves_dades_lloguer);
        return view('dashboard');
    }

    /**
     * Elimina el registro de alquiler especificado de la base de datos.
     */
    public function destroy(string $matricula_auto)
    {
        $lloguer = Lloga::findOrFail($matricula_auto)->delete();
        return view('dashboard');
    }

    public function pdf(string $matricula_auto)
    {
        $dades_lloguer = Lloga::findOrFail($matricula_auto);

        // Configuració Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $html = view('pdflloguer', compact('dades_lloguer'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream("lloguer" . $matricula_auto. ".pdf");
    }
}
