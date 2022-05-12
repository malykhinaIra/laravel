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
        $valid = $request->validate([
            'mail' => 'required|min:5|max:50',
        ]);
        dd($request);
        return view('form', ['mail' => $mail]);
     }

}
