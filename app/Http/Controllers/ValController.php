<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

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
          $correct = "Try Again";
          return redirect('site')->withCorrect($correct);
        }

      }

      return view('index');
    }


    public function returnIndex(){
      return view('index');

    }


    public function returnSite(Request $request){

      $correct = "Try Again";
      return view('site')->withCorrect($correct);

    }


}
