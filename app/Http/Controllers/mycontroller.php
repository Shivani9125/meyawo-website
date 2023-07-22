<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\submit;
class mycontroller extends Controller
{
    //
    public function submit(){
        return view('index');
    }

    public function insert(Request $request){
       
        $sub = new submit();
        $sub->name= $request['name'];
        $sub->email= $request['email'];
        $sub->comment= $request['comment'];
        $sub->save();
        echo "Form Submitted Successfully";

    }
}
