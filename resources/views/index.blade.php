@extends('layouts.app')

@section('title', 'Accueil - Gestion de stock')

@section('content')
<div class="py-5 text-center bg-light rounded shadow-sm">
    <h1 class="display-4 mb-3">📦 Application de Gestion de Stock</h1>
    <p class="lead">Bienvenue dans votre outil de gestion des matériels et des catégories.</p>

    <div class="mt-4">
        <a href="{{ route('items.index') }}" class="btn btn-primary btn-lg me-2">Voir les matériels</a>
        <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-lg">Voir les catégories</a>
    </div>
</div>
@endsection
