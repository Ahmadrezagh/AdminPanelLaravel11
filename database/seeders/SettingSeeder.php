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
            [   'key' =>'name',
                'type'=>'string',
                'title'=>'نام وبسایت',
                'value'=>'پنل ادمین لاراول ۱۰',
                'setting_group_id'=>'1'
            ],
            [   'key' =>'logo',
                'type'=>'file',
                'title'=>'لوگو',
                'value'=>'/uploads/settings/logo.png',
                'setting_group_id'=>'1'
            ],
            [   'key' =>'url',
                'type'=>'string',
                'title'=>'آدرس وبسایت',
                'value'=>'http://localhost:8000',
                'setting_group_id'=>'1'
            ],

            [   'key' =>'terms',
                'type'=>'textarea',
                'title'=>'قوانین استفاده از وبسایت',
                'value'=>'<p>قوانین استفاده از وبسایت را اینجا بنویسید....</p>',
                'setting_group_id'=>'2'
            ],
            [   'key' =>'about_us',
                'type'=>'textarea',
                'title'=>'درباره ما',
                'value'=>'<p>متن درباره ما ...</p>',
                'setting_group_id'=>'2'
            ],
            [   'key' =>'contact_us',
                'type'=>'textarea',
                'title'=>'تماس با ما',
                'value'=>'<p>متن تماس با ما...</p>',
                'setting_group_id'=>'3'
            ],
            [   'key' =>'email',
                'type'=>'string',
                'title'=>'ایمیل',
                'value'=>'support@site.com',
                'setting_group_id'=>'2'
            ],
            [   'key' =>'phone',
                'type'=>'string',
                'title'=>'شماره تماس',
                'value'=>'+98 021 123456',
                'setting_group_id'=>'2'
            ],
        ];
        foreach ($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
