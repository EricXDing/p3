<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DirectorController extends Controller
{
        //
        public function index(){
          return view('content.index');
        }

        public function result(Request $request) {

          $this->validate($request, [
            'buyerName' => 'required',
            'sellerName' => 'required',
            'gs' => 'required',
            'price' => 'required|numeric'
          ]);


          return view ('content.result')->with([
            // 'variable name in View' => $variableHere;


            'buyerName' => $request->input('buyerName'),
            'sellerName' => $request->input('sellerName'),
            'gs' => $request->input('gs'),
            'gsName' => $request->input('gsName'),
            'price' => $request->input('price'),
            'nonRefundable' => $request->input('nonRefundable'),
            'arbitration' => $request->input('arbitration'),
            'textArea' =>$request->input('textArea'),

          ]);
          // return view('content.result');
        }
}
