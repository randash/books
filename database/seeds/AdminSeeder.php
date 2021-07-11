<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'randa',
            'email' => 'randa.sh@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
