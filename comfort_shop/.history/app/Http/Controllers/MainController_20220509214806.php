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
        return view('form', ['mail' => $mail]);
    }

     public function check(Request $request) {
        $valid = $request->validate([
            'mail' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/')
        ]);
        return $this->result($request);
    }

}
