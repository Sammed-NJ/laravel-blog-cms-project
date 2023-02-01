<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // * Mass Assignment
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'tinyMSCcontent',
        // 'posts_images',
    ];


    // * Post Belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}