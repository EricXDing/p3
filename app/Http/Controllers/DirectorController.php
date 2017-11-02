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

          dump($request->all());

          $this->validate($request, [
            'buyerName' => 'required',
            'sellerName' => 'required',
            'gs' => 'required',
            'price' => 'required|numeric'
          ]);

          // $sellerName = $request->input('sellerName');
          // $buyerName = $request->input('buyerName');
          // $gs = $request->input('gs');
          // $gsName = $request->input('gsName');
          // $price = $request->input('price');
          // $nonRefundable = $request->input('nonRefundable');
          // $arbitration = $request->input('arbitration');
          // $other = $request->input('other');
          // $textArea = $request->input('textArea');
          // $otherProvisions = array($nonRefundable, $arbitration, $other);


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

            // 'otherProvisions' => $otherProvisions,

          ]);
          // return view('content.result');
        }
}
