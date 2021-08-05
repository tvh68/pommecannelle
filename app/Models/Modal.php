<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'modal_titre',
        'modal_texte',
        'modal_image',
        'modal_afficher'
    ];
}
