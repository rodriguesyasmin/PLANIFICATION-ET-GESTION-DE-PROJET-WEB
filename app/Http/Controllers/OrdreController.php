<?php

namespace App\Http\Controllers;

use App\Models\Ordre;
use App\Models\Produit;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class OrdreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordres = Ordre::with(['utilisateur', 'produit'])->get();
        return view('ordre.index', compact('ordres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $utilisateurs = Utilisateur::all();
        $produits = Produit::all();
        return view('ordre.create', compact('utilisateurs', 'produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'utilisateur_id' => 'required|exists:utilisateurs,id',
            'produit_id' => 'required|exists:produits,id',
            'quantite' => 'required|integer|min:1',
        ]);

        Ordre::create($validatedData);

        return redirect()->route('ordres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordre $ordre)
    {
        return view('ordre.show', compact('ordre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordre $ordre)
    {
        $utilisateurs = Utilisateur::all();
        $produits = Produit::all();
        return view('ordre.edit', compact('ordre', 'utilisateurs', 'produits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordre $ordre)
    {
        $validatedData = $request->validate([
            'utilisateur_id' => 'required|exists:utilisateurs,id',
            'produit_id' => 'required|exists:produits,id',
            'quantite' => 'required|integer|min:1',
        ]);

        $ordre->update($validatedData);

        return redirect()->route('ordres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordre $ordre)
    {
        $ordre->delete();
        return redirect()->route('ordres.index');
    }
}
