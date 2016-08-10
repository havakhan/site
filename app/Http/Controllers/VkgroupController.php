<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VkgroupController extends TypeControllers\PublicController
{
    public function index(){
        $data=[
            'iscurrent' => !is_null(\Auth::user()),
            'title' =>'ГРУППЕ',
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
        ];
        return   view('vkgroup', $data);
    }
}
