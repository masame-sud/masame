<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $mensajes = Mensaje::latest()->get();
        return view ('mensajes.index', ['mensajes' => $mensajes]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'nombre' =>'required',
            'email' => 'required',
            'mensaje' => 'required|max:250'
        ]);

        Mensaje::create($request->all());
        return redirect()->route('mensajes.index')->with('success', 'Nueva mensaje guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
