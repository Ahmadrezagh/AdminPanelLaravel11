<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'مدیر ارشد',
                'type' => User::$TYPES[0],
                'email'=>'superadmin@site.com',
                'password'=>'1234567890'
            ],
            [
                'name' => 'مدیر',
                'type' => User::$TYPES[1],
                'email'=>'admin@site.com',
                'password'=>'1234567890'
            ],
            [
                'name' => 'کاربر',
                'type' => User::$TYPES[2],
                'email'=>'user@site.com',
                'password'=>'1234567890'
            ],
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
