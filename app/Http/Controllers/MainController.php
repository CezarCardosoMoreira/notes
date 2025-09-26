<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index($value){
        return view('main', ['value' => $value]);
}
    public function page2(){
        return view('page2');
}
    public function page3(){
        return view('page3');
}

}
