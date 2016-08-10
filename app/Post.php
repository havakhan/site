<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function pepyakaUP(){
        return $this->hasMany(Pepyaka::class)
            ->where('deleted_at',NULL)
            ->where('up','1');

    }


    public function pepyakaDOWN(){
        return $this->hasMany(Pepyaka::class)
            ->where('deleted_at',NULL)
            ->where('up','0');

    }

    public function pepyakas(){
        return $this->hasMany(Pepyaka::class)
            ->where('deleted_at',NULL);
    }

    public static function getPublishedPost(){
        $posts=post::latest('created_at');
        return $posts;
    }

    public static function store($request)
    {
       $post = new Post();
       $post->user_id=\Auth::User()->id;
       $post->text=$request['text'];
       $post->save();
    }

    public static function getPost($id){
     $post=Post::find($id);
     return $post;

    }

    public static function isMyPost($id){
        $post=Post::find($id);
        If ($post->user_id == \Auth::User()->id ){
            return true;
        }
        return false;
    }
}
