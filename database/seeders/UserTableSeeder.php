<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            // admin
            [           
                'name' => 'Admin',
                'username'=>'admin',
                'email' => 'admin@gmail.com',
                'password'=> Hash::make('12345678'),
                'role' => 'admin',
                'status' => '1'
            ],
            
            // instrutor
            [           
                'name' => 'Instructor One',
                'username'=>'instructor-one',
                'email' => 'instructorone@gmail.com',
                'password'=> Hash::make('12345678'),
                'role' => 'instructor',
                'status' => '1'
            ],
            // user
            [           
                'name' => 'User One',
                'username'=>'user-one',
                'email' => 'userone@gmail.com',
                'password'=> Hash::make('12345678'),
                'role' => 'user',
                'status' => '1'
            ],

        ]);
    }
}
