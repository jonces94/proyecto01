<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome() {
        $a = 16;
        $b = 26;
        $c = $a + $b;
        //return " El resultado es de $c";
        return view('welcome');
    }
}
