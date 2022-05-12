<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function forItem(Request $request, $id) {
        $catalog = [
            new Item("../public/img/image 24.png", "Стілець, дерев’яний", 800),
            new Item("img/image 25.png", "Крісло, дерево & шкіра", 1300),
            new Item("img/image 26.png", "Настінна картина", 1230),
            new Item("img/image 27 (1).png", "Журнальний столик", 980),
            new Item("img/image 35.png", "Тумбочка з відділами", 780),
            new Item("img/image 37.png", "Диван розкладний", 3220),
            new Item("img/image 36.png", "Тумбочка, дерев’яна", 1360),
            new Item("img/image 31.png", "Крісло, біле", 980)
        ];
        return view('item', ['item' => $catalog[$id - 1]]);
    }
}
