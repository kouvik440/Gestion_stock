<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // 🟢 Liste des catégories
    public function index()
    {
        $categories = Category::paginate(5);
        return view('categories.index', compact('categories'));
    }

    // 🟢 Formulaire de création
    public function create()
    {
        return view('categories.create');
    }

    // 🟢 Enregistrer une catégorie
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable'
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée avec succès.');
    }

    // 🟢 Formulaire de modification
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // 🟢 Mettre à jour une catégorie
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable'
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie modifiée avec succès.');
    }

    // 🟢 Supprimer une catégorie
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
