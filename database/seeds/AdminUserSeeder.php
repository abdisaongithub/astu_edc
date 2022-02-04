<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Solomon', 'email' => 'edc.astu.edu.et',
             'password' => 'bcrypt(sol@edc123)', 
         
        ]);
    }
}
