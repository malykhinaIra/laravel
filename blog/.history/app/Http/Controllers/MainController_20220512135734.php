<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Room;

class MainController extends Controller {

    public function forLend() {
        return view('lend');
    }

    public function forCatalog() {
        $room = new Room();
        return view('catalog', ['rooms' => $room->getAll()]);
    }

    public function forInfo() {
        return view('info');
    }

    public function check(Request $request) {
        $valid = $request->validate([
            'mail' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/')
        ]);
        return $this->result($request);
    }

    public function result(Request $request) {
        $mail = $request->input('mail');
        return view('form', ['mail' => $mail]);
    }

    public function forItem($id) {
        $catalog = new Item();
        return view('item', ['item' => $catalog->getAll()[$id - 1]]);
    }
}
