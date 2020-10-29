<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
    	User::create([
    		'name' => 'Shail Gandhi',
    		'email' => 'shail.gandhi@gmail.com',
    		'password' => Hash::make('password'),
    		'role' => 1
    	]);

    	User::create([
    		'name' => 'Rutul Parikh',
    		'email' => 'rutul.parikh@gmail.com',
    		'password' => Hash::make('password'),
    		'role' => 2
    	]);

    	User::create([
    		'name' => 'Harsh Parikh',
    		'email' => 'harsh.parikh@gmail.com',
    		'password' => Hash::make('password'),
    		'role' => 3
    	]);
    }
}
