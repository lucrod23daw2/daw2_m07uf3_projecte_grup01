<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use Dompdf\Dompdf;
use Dompdf\Options;

class ControladorAuto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_autos = Auto::all();
        return view('llista', compact('dades_autos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    public function store(Request $request)
    {
        $nouAuto = $request->validate([
            'matricula_auto' => 'required',
            'num_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'places' => 'required',
            'portes' => 'required',
            'gran_maleter' => 'required',
            'combustible' => 'required',
        ]);
        $auto = Auto::create($nouAuto);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $matricula_auto)
    {
        $dades_auto = Auto::findOrFail($matricula_auto);
        return view('mostra',compact('dades_auto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $matricula_auto)
    {
        $dades_auto = Auto::findOrFail($matricula_auto);
        return view('actualitza',compact('dades_auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $matricula_auto)
    {
        $noves_dades_auto = $request->validate([
            'matricula_auto' => 'required',
            'num_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'places' => 'required',
            'portes' => 'required',
            'gran_maleter' => 'required',
            'combustible' => 'required',
        ]);
        Auto::findOrFail($matricula_auto)->update($noves_dades_auto);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $matricula_auto)
    {
        $auto = Auto::findOrFail($matricula_auto)->delete();
        return view('dashboard');
    }

    public function pdf(string $matricula_auto)
    {
        $dades_auto = Auto::findOrFail($matricula_auto);

        // Configuració Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $html = view('pdf', compact('dades_auto'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream("auto" . $matricula_auto . ".pdf");
    }
}
