<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
		$this->command->info('Tabla usuarios inicializada con datos!');
    }

     public function seedUsers()
    {
    	DB::table('users')->delete();
    	$usuario1= new User;
    	$usuario1->name="Fernandez Alvaro Ernesto";
    	$usuario1->email="alvaroernestofernandez@gmail.com";
    	$usuario1->password=bcrypt('chake154');
    	$usuario1->telefono='3874469417';
    	$usuario1->save();
    	$usuario2= new User;
    	$usuario2->name="Gutierrez Eduardo Jose";
    	$usuario2->email="mundo_muebles@hotmail.com";
    	$usuario2->password=bcrypt('eduardo');
    	$usuario2->telefono='3874205936';
    	$usuario2->save();
    }
}
