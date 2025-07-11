<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'reference',
        'category_id',
        'quantite',
        'date_ajout',
        'statut',
    ];

    // 🔁 Relation : Un matériel appartient à une catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
