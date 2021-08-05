<?php

namespace Database\Seeders;

use App\Models\Modal;
use Illuminate\Database\Seeder;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ce seeder à principalement pour but de s'assûrer que l'id du modal soit initialisé à 1.
        Modal::create([
            'id' => '1',
            'modal_titre' => 'Mon premier titre',
            'modal_texte' => 'Mon premier texte',
            'modal_image' => '',
            'modal_afficher' => '0'
        ]);
    }
}
