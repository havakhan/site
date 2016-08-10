<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public static function store($id,$request)
    {
        $comment = new Comment();
        $comment->user_id=\Auth::User()->id;
        $comment->post_id=$id;
        $comment->text=$request['text'];
        $comment->save();
    }

public static function getComment($id){
    $post=Comment::find($id);
    return $post;
}
}
