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
        App\User::create([
        	'name' => 'SAN Vuthy',
        	'email' => 'san.vuthy08@gmail.com',
        	'password' => bcrypt('vuthy1997*')
        ]);

    }
}
