<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'produit_libelle',
        'produit_description',
        'produit_image',
        'produit_prix',
        'categorie_id'
    ];
}
