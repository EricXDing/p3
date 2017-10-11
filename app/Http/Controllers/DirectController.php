<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controller;

class DirectController extends Controller
{
    //
    public function index(){
      return 'the home page';
    }

    public function show ($placeHolder) {
      return 'this is a '.$placeHolder;
    }
}
