<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends TypeControllers\PrivateController
{


    public function CreatePost(){
        $data=[
            'iscurrent' => true,
            'title' =>'НОВИ ПСТО',
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
        ];
        return   view('newpsto', $data);
    }

    public function store(Request $request){

    Post::store($request->all());
        return redirect('/');
    }


}