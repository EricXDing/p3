<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
        //
        public function index(){
          return 'the home page';
        }

        public function show ($placeHolder) {
          return 'this is a '.$placeHolder;
        }
}
