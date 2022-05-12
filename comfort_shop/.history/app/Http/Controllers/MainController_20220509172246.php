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

    public function form(Request $request) {
        echo $request->input('mail'); // в переменной $request содержатся данные запроса
        return view('form');
     }
     public function result(Request $request) {
        $text = $request->input('mail');
        return view('result', ['mail' => $text]);
     }
    public function check(Request $request) {
        $valid = $request->validate([
            'username' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ]);
        dd($request);
    }

}
