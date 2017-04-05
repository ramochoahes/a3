<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class ValController extends Controller
{

    public function getVal(Request $request) {

      if ($_GET) {

        $this->validate($request, [

          'email' => 'required',
          'password' => 'required'

        ]);
  }

        if(count($errors) > 0)
        {
          return redirect('site');
        }
        else {
          return view('index');
        }

    }
  }
