<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
        public function run()
        {
            $users = [
                [
                   'name'=>'Admin User',
                   'email'=>'admin@gmail.com',
                   'type'=>1,
                   'password'=> bcrypt('78617861'),
                ],
                [
                   'name'=>'Jigs (Admin)',
                   'email'=>'jigssuthar7861@gmail.com',
                   'type'=> 1,
                   'password'=> bcrypt('78617861'),
                ],
                [
                   'name'=>'User',
                   'email'=>'user@tutsmake.com',
                   'type'=>0,
                   'password'=> bcrypt('123456'),
                ],
            ];
        
            foreach ($users as $key => $user) {
                User::create($user);
            }
        }
    
}
