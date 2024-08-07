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
        $groups = [
            'وبسایت',
            'درباره ما',
            'تماس با ما',
            'سئو',
        ];
        foreach ($groups as $group)
        {
            SettingGroup::create([
                'title' => $group
            ]);
        }
    }
}
