<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function result(Request $request) {
        $mail = $request->input('mail');
        $valid = $request->validate($this->all(), [
            'mail' =>  array('required|min:5|max:50', 'regex:/[0-9a-z]+@[a-z]/')
        ]);
        return view('form', ['mail' => $mail]);
     }

}
