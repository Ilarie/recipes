<?php

use Illuminate\Database\Seeder;
use Recipes\Ingredient_Recipe;

class Ingredient_RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=3; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 1,
        	            'ingredient_id' => $i 
            ]);
        }
        
        for($i = 2; $i<=9; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 2,
                        'ingredient_id' => $i 
            ]);
        }

        for($i = 10; $i<=13; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 3,
                        'ingredient_id' => $i 
            ]);
        }
		
		DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 3,
                        'ingredient_id' => 3 
        ]);
		
		DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 3,
                        'ingredient_id' => 6 
        ]);

		DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 4,
                        'ingredient_id' => 1 
        ]);
        
        for($i = 13; $i<=15; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 4,
                        'ingredient_id' => $i 
            ]);
        }

        for($i = 3; $i<=4; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 4,
                        'ingredient_id' => $i 
            ]);
        }
        
		for($i = 1; $i<=2; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                      'recipe_id' => 5,
	                      'ingredient_id' => $i 
            ]);
    	}

    	for($i = 16; $i<=18; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                      'recipe_id' => 5,
	                      'ingredient_id' => $i 
            ]);   
    	}

    	for($i = 19; $i<=24; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                        'recipe_id' => 6,
	                        'ingredient_id' => $i 
            ]);   
    	}

    }
}
