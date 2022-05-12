<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller {

    public function forLend() {
        return view('lend');
    }

    public function forCatalog() {
        return view('catalog');
    }

    public function forInfo() {
        return view('info');
    }

    public function check(Request $request) {
        $validator = Validator::make($request->all(), [
            'mail' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/')
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
              current($errors)
            ]);
        }

        else return $this->result($request);
    }

}
