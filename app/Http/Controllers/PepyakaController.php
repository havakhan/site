<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Pepyaka;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PepyakaController extends TypeControllers\PrivateController
{

public function upPepyakaPost($owner_id){
if (!Post::isMyPost($owner_id)){
    Pepyaka::upPost($owner_id);
   }
    return redirect('/');
}

public function downPepyakaPost($owner_id){
    if (!Post::isMyPost($owner_id)) {
        Pepyaka::downPost($owner_id);
    }
    return redirect('/');

}
public function showPepyakaPost($owner_id){
    $pepyakas = Post::getPost($owner_id)->pepyakas;
        return view(
        'pepyakapost',
        [
            'iscurrent' => !is_null(\Auth::user()),
            'title' => "ПЕПЯКА ПСТО",
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
            'pepyakas'=>$pepyakas,
        ]
    );
}

}