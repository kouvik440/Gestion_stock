<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // 🟢 Afficher la liste des matériels (avec pagination)
    public function index()
    {
        $items = Item::with('category')->paginate();
        return view('items.index', compact('items'));
    }

    // 🟢 Afficher le formulaire d’ajout
    public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    // 🟢 Enregistrer un nouveau matériel
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'reference' => 'required',
            'quantite' => 'required|integer',
            'statut' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Matériel ajouté avec succès.');
    }

    // 🟡 Afficher un matériel précis (non utilisé ici mais généré par défaut)
    public function show($id)
    {
        $item = Item::with('category')->findOrFail($id);
        return view('items.show', compact('item'));
    }

    // 🟠 Afficher le formulaire de modification
    public function edit(Item $item)
    {
        $categories = Category::all(); // pour le dropdown
        return view('items.edit', compact('item', 'categories'));
    }



    // 🟠 Mettre à jour le matériel
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'reference' => 'required',
            'quantite' => 'required|integer',
            'statut' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Matériel modifié avec succès.');
    }

    // 🔴 Supprimer un matériel
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Matériel supprimé avec succès.');
    }
}
