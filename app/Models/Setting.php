<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'key',
        'setting_group_id',
        'type',
        'value',
    ];

    public static $types = [
        'string',
        'numeric',
        'email',
        'tel',
        'textarea',
        'file',
    ] ;

    public static function getValue($key)
    {
        return self::where('key',$key)->pluck('value')->first();
    }
}
