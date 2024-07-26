<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'phone',
        'profile_image',
    ];

    public static $TYPES = [
        'SUPERADMIN',
        'ADMIN',
        'USER',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles');
    }

    public function hasPermission(Permission $permission)
    {
        return $this->hasPermissionsThroughRole($permission);
    }

    protected function hasPermissionsThroughRole(Permission $permission)
    {
        foreach ($permission->roles as $role)
        {
            if($this->roles->contains($role)) return true;
        }
        return false;
    }

    public function scopeAdmins(Builder $query)
    {
        return $query->where('type' , '=', User::$TYPES[1]);
    }

    public function scopeUsers(Builder $query)
    {
        return $query->where('type' , '=', User::$TYPES[2]);
    }

    public function hasRole(Role $role)
    {
        return $this->roles()->where('role_id', '=', $role->id)->exists();
    }

    public function isSuperadmin()
    {
        return($this->type == User::$TYPES[0]);
    }

    public function isAdmin()
    {
        return($this->type == User::$TYPES[1]);
    }

    public function isUser()
    {
        return($this->type == User::$TYPES[2]);
    }

    public function getProfileImageAttribute($value)
    {
        if($value){
            return url($value);
        }
        return url('uploads/profiles/default/user.png');
    }

}
