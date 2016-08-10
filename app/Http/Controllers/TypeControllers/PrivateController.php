<?php

namespace App\Http\Controllers\TypeControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Modules\Kote;
class PrivateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
}
