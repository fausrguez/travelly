<?php

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'fausrguez',
            'email' => 'fausrguez@yahoo.com',
            'role' => 'admin',
            'password' => 'Admin1234',
            'name' => 'Faus',
            'surname' => 'Rodríguez',
        ]);
        DB::table('users')->insert([
            'username' => 'username1',
            'email' => 'user@user.com',
            'role' => 'user',
            'password' => 'Admin12334',
            'name' => 'User',
            'surname' => 'One',
        ]);
    }
}
