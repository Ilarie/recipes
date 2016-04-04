<?php

use Illuminate\Database\Seeder;
use Recipes\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create(['name' => 'uova']);
        Ingredient::create(['name' => 'farina']);
        Ingredient::create(['name' => 'sale']);
        Ingredient::create(['name' => 'olio']);
        Ingredient::create(['name' => 'latte']);
        Ingredient::create(['name' => 'pollo']);
        Ingredient::create(['name' => 'cipolla']);
        Ingredient::create(['name' => 'carote']);
        Ingredient::create(['name' => 'curry']);
        Ingredient::create(['name' => 'patate']);
        Ingredient::create(['name' => 'rosmarino']);
        Ingredient::create(['name' => 'aglio']);
        Ingredient::create(['name' => 'zucchine']);
        Ingredient::create(['name' => 'parmigiano']);
        Ingredient::create(['name' => 'pepe']);
        Ingredient::create(['name' => 'cioccolato']);
        Ingredient::create(['name' => 'burro']);
        Ingredient::create(['name' => 'zucchero']);
		Ingredient::create(['name' => 'pasta']);
        Ingredient::create(['name' => 'mozzarella']);
        Ingredient::create(['name' => 'olive']);
        Ingredient::create(['name' => 'capperi']); 
        Ingredient::create(['name' => 'pecorino']); 
        Ingredient::create(['name' => 'salsa']);   
    }
}
