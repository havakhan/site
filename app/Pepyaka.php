<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pepyaka extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }



    public static function upPost($owner_id){
    $pepyaka = new Pepyaka();
    $pepyaka->user_id  =\Auth::User()->id;
    $pepyaka->post_id = $owner_id ;
    $pepyaka->up = true;
    $pepyaka->save();
    $author = Post::getPost($owner_id)->user;
    ++$author->pepyaka;
    $author->save();
    }

    public static function downPost($owner_id){
        $pepyaka = new Pepyaka();
        $pepyaka->user_id  =\Auth::User()->id;
        $pepyaka->post_id = $owner_id ;
        $pepyaka->up = false;
        $pepyaka->save();
        $author = Post::getPost($owner_id)->user;
        --$author->pepyaka;
        $author->save();
    }



    public static function upComment($owner_id){
        $pepyaka = new Pepyaka();
        $pepyaka->user_id  =\Auth::User()->id;
        $pepyaka->comment_id = $owner_id ;
        $pepyaka->up = true;
        $pepyaka->save();
        $author = Post::getComment($owner_id)->user;
        ++$author->pepyaka;
        $author->save();
    }


    public static function downComment($owner_id){
        $pepyaka = new Pepyaka();
        $pepyaka->user_id  =\Auth::User()->id;
        $pepyaka->comment_id = $owner_id ;
        $pepyaka->up = false;
        $pepyaka->save();
        $author = Post::getComment($owner_id)->user;
        ++$author->pepyaka;
        $author->save();
    }

}
