<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use App\Categorie;
use App\Etape;
use App\Ingredient;
use App\Recette;
use App\Utilisateur;
use App\IngredientRecette;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $result = Avatar::getAvatar();
        foreach ((range(1, 15)) as $value) 
        {
            $avatar = $result['hits'][rand(0,199)]['webformatURL'];
            Avatar::create(array(
                'url' => $avatar
                )
            );
        }
        factory(Utilisateur::class, 20)->create();
        factory(Recette::class, 20)->create();
    	factory(Categorie::class, 9)->create();
    	factory(Etape::class, 80)->create();
    	factory(Ingredient::class, 40)->create();
    	factory(IngredientRecette::class, 120)->create();

    	$categoriesIds = DB::table('categories')->pluck('id')->toArray();
    	$recettesIds = DB::table('recettes')->pluck('id')->toArray();

    	//Remplit la table categories_recettes de 40 lignes 
    	foreach ((range(1, 30)) as $value) {
			DB::table('categories_recettes')->insert(
			[
			'categorie_id' => $categoriesIds[array_rand($categoriesIds)],
			'recette_id' => $recettesIds[array_rand($recettesIds)]
			]
			);
		}
    }
}
