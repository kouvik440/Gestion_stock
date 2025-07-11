<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description'];

    // 🔁 Relation : Une catégorie a plusieurs matériels (items)
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
