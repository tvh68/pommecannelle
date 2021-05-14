<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['viennoiserie', 'gâteau', 'dessert', 'plat'];
        $descriptions = ['croissants nature, au gros sucre, cranberries, pains au chocolat, couque à la crème',
                        'Frangipanne cerise, pomme cannelle, abricot', 'mousse au chocolat, crème citron, 
                        tartelette multi-fruit','repas chaud du midi'];

        for($i = 0; $i < count($categories); $i++)
        {
            Categorie::create([
                'categorie_libelle' => $categories[$i],
                'categorie_description' => $descriptions[$i]
            ]);
        }
    }
}
