<?php

namespace App\Http\Controllers;

use App\Http\Modules\Kote;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\TypeControllers;
use App\User;
use App\Post;

class GlagneController extends TypeControllers\PublicController
{
    public function index(){

        $posts=post::getPublishedPost()->paginate(10);
          return view(
            'blog',
            [
                'iscurrent' => !is_null(\Auth::user()),
                'title' => "ГЛАГНЕ",
                'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
                'posts'=>$posts,
            ]
        );
    }
}
