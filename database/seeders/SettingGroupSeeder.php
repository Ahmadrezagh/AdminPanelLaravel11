<?php

namespace Database\Seeders;

use App\Models\SettingGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting_groups = [
            [
                'title' =>'تنظیمات سایت',
            ]
        ];
        foreach ($setting_groups as $setting_group)
        {
            SettingGroup::create($setting_group);
        }
    }
}
