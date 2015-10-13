<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{

    public function hello(){
        $model = new \App\HelloWorld();

        $data["hello"] = $model -> getString();

        return view('helloWorld', $data);
    }
}
