<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;

class ValController extends Controller
{

    public function getVal(Request $request) {

      if ($_GET) {

        $validator = Validator::make($request->all(), [
          	'email' => 'required',
          	'password' => 'required',
              ]);

        if ($validator->fails()) {
    	       return redirect('index') //change this to your desired url
        		->withErrors($validator)
        		->withInput();
          }
          else {
            return view('site');
          }
          }

    }

      public function returnIndex(){
        return view('index');
      }

      public function returnSite(){
        return view('site');
      }
}
