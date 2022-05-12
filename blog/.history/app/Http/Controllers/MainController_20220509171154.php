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

    public function form() {
        return view('yourReview');
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
