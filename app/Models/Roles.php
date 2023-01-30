<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class roles extends Model
{
    use HasFactory;


    //  * Fillable Values to be Assigned
    protected $fillable = [
        'name',
        'description'
    ];

    // * Roles as Many Permissions
    public function permissions()
    {

        return $this->belongsToMany(Permission::class);
    }


    // * Roles as Many Users
    public function users()
    {

        // return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class, 'users_roles')->withPivot('roles_id', 'user_id');
    }
}