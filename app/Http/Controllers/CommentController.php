<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;

class CommentController extends TypeControllers\PublicController
{

    public function store($id,Request $request){

        Comment::store($id,$request->all());
        return redirect('/posts/'.$id);
    }

    public function ShowPostAndCooments($id){
        $post = Post::getPost($id);

        $data=[
            'id'=>$id,
            'iscurrent' => !is_null(\Auth::user()),
            'post'=> $post,
            'title' =>'ПСТО',
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
        ];

        return   view('post', $data);
    }

}