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
    	 factory(App\User::create([
        	'name'=>'enzo fernandez',
        	'email'=>'enzofernandez@gmail.com',
        	'email_verified_at' => now(),
        	'password'=> bcrypt('123'),
        	'remember_token' => Str::random(10),
        	'rol'=>'admin',
        ]));

        factory(App\User::class, 5)->create();

    }
}
