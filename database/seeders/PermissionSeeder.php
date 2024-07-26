<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'title' =>'مدیران',
                'key' => 'admin'
            ],
            [
                'title' =>'کاربران',
                'key' => 'user'
            ],
            [
                'title' =>'نقش ها',
                'key' => 'role'
            ],
            [
                'title' =>'دسته بندی',
                'key' => 'category'
            ],
            [
                'title' =>'خانه',
                'key' => 'home'
            ],
            [
                'title' =>'تنظیمات',
                'key' => 'setting'
            ],

        ];

        foreach ($permissions as $permission)
        {
            Permission::create($permission);
        }
    }
}
