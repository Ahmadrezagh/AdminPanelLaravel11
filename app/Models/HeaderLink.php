<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'url'
    ];
    public function getUrlAttribute($value)
    {
        if(str_contains($value, 'http')){
            return $value;
        }
        return url($value);
    }
}
