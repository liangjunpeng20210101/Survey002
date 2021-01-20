<?php

namespace App\Http\Controllers;

use App\Model\Survey001;
use Illuminate\Http\Request;

class Survey001Controller extends Controller
{
    //储存评论
    public function store(Request $request){
        $net_state = $request->input('netstate');
        $teaching_method = $request->input('teachingmeth');
        if ($net_state || $teaching_method)
        {
            $table = new Survey001();
            if ($net_state)
            {
                $table->net_state =$net_state;
            }
            else{
                $table->net_state ='null';
            }
            $table->teaching_method = $teaching_method;
            $table->save();
            return redirect('look_up');
        }
        else
        {
            return '链接错误';
        }
        
    }

}
