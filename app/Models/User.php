<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Roles;
use App\Models\Permissions;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //  * Fillable Values to be Assigned
    protected $fillable = [
        'name',
        'avatar',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // * One User as to Many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // * Users as to Many Permissions

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class);
    }

    // * Users as to Many Roles
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'users_roles')->withPivot('roles_id', 'user_id');
    }
}