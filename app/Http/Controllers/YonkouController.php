<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YonkouController extends Controller
{
    public function index(){
        $sites = json_decode(file_get_contents('src/content/sites.json'));

        return view('0 yonkou.index',compact('sites'));
    }
}
