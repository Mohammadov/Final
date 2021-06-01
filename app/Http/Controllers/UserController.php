<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getView(){
        $data=['mohamad','saleh','awad'];
        $obj=new \stdClass();
        $obj->name='khaled';
        $obj->id=6;
        return view('admin',compact('obj'),compact('data'));
    }
    public function getLanding(){
        return view('landing');
    }
}
