<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZlogenController extends TypeControllers\PublicController
{
    public function index(){
        $data=[
            'iscurrent' => !is_null(\Auth::user()),
            'title' =>'ЗЛОГЕНЕ',
            'lepro_kote' => \App\Http\Modules\Kote::getRandom(),
        ];
        return   view('zlogene', $data);
    }
}
