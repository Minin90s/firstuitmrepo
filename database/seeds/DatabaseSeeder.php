<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Amirul',
            'email' => 'admin@gmail.my',
            'password' => bcrypt('password'),
        ]);
    }
}
