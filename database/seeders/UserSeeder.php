<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i = 1; $i < 3; $i++) {
            User::create([
                
                'name' => "User ". $i,
                'email'=>'user'.$i.'@gmail.com',
                'password'=>bcrypt('password'),
                'role'=>'user'
                
                
            ]);
        }
    }
}
