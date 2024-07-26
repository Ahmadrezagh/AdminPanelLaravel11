<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'title'=>'1تنظیمات',
                'key'=>'s1',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[0],
                'value'=>'q',
            ],
            [
                'title'=>'2تنظیمات',
                'key'=>'s2',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[1],
                'value'=>'09123456789',
            ],
            [
                'title'=>'3تنظیمات',
                'key'=>'s3',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[2],
                'value'=>'j',
            ],
            [
                'title'=>'4تنظیمات',
                'key'=>'s4',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[3],
                'value'=>'g',
            ],
            [
                'title'=>'5تنظیمات',
                'key'=>'s5',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[4],
                'value'=>'jf',
            ],
            [
                'title'=>'6تنظیمات',
                'key'=>'s6',
                'setting_group_id'=>'1',
                'type'=>Setting::$types[5],
                'value'=>'gfjft',
            ]
        ];
        foreach ($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
