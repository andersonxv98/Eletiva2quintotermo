<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        for($i = 0 ; $i < 5; $i++){
        echo "js";}
        return view('welcome');
    }
}
