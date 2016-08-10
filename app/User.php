<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'apikey', 'kote'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'apikey'
    ];

    public function isCurrent()
    {
        return $this == \Auth::User();
    }

    public function isAdmin()
    {
        return false;
    }

    public function posts()
    {
    return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function pepyakas()
    {
        return $this->hasMany(pepyaka::class);
    }

}
