<?php

namespace App\Http\Controllers;

use App\Model\Survey001;
use Illuminate\Http\Request;

class LookController extends Controller
{
    //查阅数据
    public function look(Request $request)
    {
        # code...
       return Survey001::all(['net_state','teaching_method']);
    }
}
