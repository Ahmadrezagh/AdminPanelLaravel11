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

    public function run():void
    {
        $permissions = [
            [
                'Admin',
                'مدیر ها'
            ],
            [
                'Category',
                'دسته بندی ها'
            ],
            [
                'User',
                'کاربران'
            ],
            [
                'Setting',
                'تنظیمات'
            ]
        ];
        foreach ($permissions as $permission)
        {
            Permission::create([
                'key' => $permission[0],
                'title' => $permission[1],
            ]);
        }
    }
}
