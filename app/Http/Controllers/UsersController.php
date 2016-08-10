<?php

namespace App\Http\Controllers;

use App\Http\Modules\Kote;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends TypeControllers\PublicController
{
    public function showprofile($id){
        $user = User::where('name', '=' ,$id)->firstOrFail();
        return view(
            'userinfo',
            [
                'iscurrent' => !is_null(\Auth::user()),
                'user' => $user,
                'title' => "ВОЕНЕ $user->name",
                'lepro_kote' =>new Kote($user->kote)
            ]
        );
    }


    public function showallprofile(){
        $users = User::paginate(15);
        $data=[
            'iscurrent' => !is_null(\Auth::user()),
            'users' => $users,
            'title' =>'ВСЕ ВОЕНЕ',
            'lepro_kote' =>\App\Http\Modules\Kote::getRandom(),
        ];
        return   view('allusers', $data);
    }
}
