<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Lexer\TokenEmulator\ReadonlyTokenEmulator;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_permissions');
    }

    public function hasThisPermission(Permission $permission)
    {
        return $this->permissions()->where('permission_id','=',$permission->id)->exists();
    }
}
