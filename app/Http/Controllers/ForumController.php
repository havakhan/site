<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ForumController extends TypeControllers\PrivateController
{
    public function index(){
        $data=[
            'iscurrent' => true,
            'title' =>'ФОРУМЕ',
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
        ];
        return   view('glagne', $data);
    }
}
