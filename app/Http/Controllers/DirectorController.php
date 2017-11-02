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

          if ($request->input('nonRefundable')){
            $nonRefundable = "The transaction is as is; no refund is avaliable<p>";
          } else {
            $nonRefundable = '';
          }

          if ($request->input('arbitration')){
            $arbitration = 'In case of conflicts, the Buyer and the Seller agree to bind themselves the decision of an arbitrator.<p>';
          } else {
            $arbitration = '';
          }

          if ($request->input('textArea') || $nonRefundable != '' || $arbitration != '') {
            $articleIII = '<h3>Article III: </h3>';
          } else {
            $articleIII = '';
          }

          return view ('content.result')->with([
            // 'variable name in View' => $variableHere;

            'buyerName' => $request->input('buyerName'),
            'sellerName' => $request->input('sellerName'),
            'gs' => $request->input('gs'),
            'gsName' => $request->input('gsName'),
            'price' => $request->input('price'),
            'nonRefundable' => $nonRefundable,
            'arbitration' => $arbitration,
            'textArea' =>$request->input('textArea'),
            'articleIII' => $articleIII,

          ]);
          // return view('content.result');
        }

}
