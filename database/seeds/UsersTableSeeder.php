<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([ 
        				'name' => 'Admin',
        				'email' => 'nonna@admin.it', 
        				'password' => \Hash::make('tagliatelle'), 
        				'isAdmin' => 1
        ]);

         DB::table('users')->insert([ 
        				'name' => 'Ilaria',
        				'email' => 'ilaria@santomauro.it', 
        				'password' => \Hash::make('ilaria')
        ]);

         DB::table('users')->insert([ 
        				'name' => 'Pina',
        				'email' => 'nonna@pina.it', 
        				'password' => \Hash::make('nonnapina')
        ]);
    }
}
