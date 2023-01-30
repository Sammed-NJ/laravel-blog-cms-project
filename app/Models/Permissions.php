<?php

namespace App\Models;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permissions extends Model
{
    use HasFactory;

    //  * Fillable Values to be Assigned
    protected $fillable = [
        'name',
    ];


    // * Permissions as Many Roles
    public function roles()
    {

        return $this->belongsToMany(Roles::class);
    }

    // * Permissions as Many Users
    public function users()
    {

        return $this->belongsToMany(User::class);
    }
}