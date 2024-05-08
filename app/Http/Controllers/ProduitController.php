<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produit.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'taille' => 'required|string',
            'photo' => 'required|image|max:2048',
            'photo2' => 'sometimes|image|max:2048',
            'photo3' => 'sometimes|image|max:2048',
            'categorie' => 'required|string',
            'quantite' => 'required|integer',
        ]);

        $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
        if ($request->hasFile('photo2')) {
            $validatedData['photo2'] = $request->file('photo2')->store('photos', 'public');
        }
        if ($request->hasFile('photo3')) {
            $validatedData['photo3'] = $request->file('photo3')->store('photos', 'public');
        }

        Produit::create($validatedData);

        return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        return view('produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $produit->update($request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'taille' => 'required|string',
            'photo' => 'required|string',
            'photo2' => 'sometimes|string',
            'photo3' => 'sometimes|string',
            'categorie' => 'required|string',
            'quantite' => 'required|integer',
        ]));

        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index');
    }
}
