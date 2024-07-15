<?php

namespace App\Http\Controllers;

use App\Models\Astro;
use Illuminate\Http\Request;

class AstroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $astros = Astro::all();
        // dd($astros);
        return view ('/astro' ,compact('astros'));
    }


    public function create(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'navete'=>'required',
            'email'=>'required',
        ]);

        Astro::create($request->all());
        return redirect()->route('astro.liste')->with('succes','astronaute ajouter avec succes');

    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $astros = Astro::findOrFail($id);

        return view('/detail', compact('astros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $astros = Astro::findOrFail($id);

        return view('/update', compact('astros'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $astros = Astro::findOrFail($id);
        $astros->nom= $request->input('nom');
        $astros->prenom= $request->input('prenom');
        $astros->email= $request->input('email');
        $astros->navete= $request->input('navete');
        $astros->update();
        return redirect()->route('astro.liste')->with('succes', 'astronaute modifier avec sucess');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $astros =Astro::findOrFail($id);
        $astros->delete();
        return redirect()->route('astro.liste')->with('succes', 'astronaute supprimer avec success');
    }
}
