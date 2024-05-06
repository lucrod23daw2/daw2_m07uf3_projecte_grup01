<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;

class ControladorUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_user = User::all();
        return view('llistausers', compact('dades_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creauser');
    }

    public function store(Request $request)
    {
        $nouUser = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
        ]);
        
        $User = User::create($nouUser);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $email)
    {
        $dades_user = User::findOrFail($email);
        return view('mostrauser',compact('dades_user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $email)
    {
        $dades_user = User::findOrFail($email);
        return view('actualitzauser',compact('dades_user'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, string $email)
    {
        $noves_dades_user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
        ]);
        
        User::findOrFail($email)->update($noves_dades_user);
        return view('dashboard');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(string $email)
    {
        $User = User::findOrFail($email)->delete();
        return view('dashboard');
    }

    public function pdf(string $email)
    {
        $dades_user = User::findOrFail($email);

        // Configuració Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $html = view('pdfusers', compact('dades_user'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream("client_" . $email . ".pdf");
    }
}
