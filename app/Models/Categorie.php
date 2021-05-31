<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'categorie_libelle',
        'categorie_description'     
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
