<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
    class Catalog extends Model
    {
        protected $catalog = [
            new Item("img/image 24.png", "Стілець, дерев’яний", 800),
            new Item("img/image 25.png", "Крісло, дерево & шкіра", 1300),
            new Item("img/image 26.png", "Настінна картина", 1230),
            new Item("img/image 27 (1).png", "Журнальний столик", 980),
            new Item("img/image 35.png", "Тумбочка з відділами", 780),
            new Item("img/image 37.png", "Диван розкладний", 3220),
            new Item("img/image 36.png", "Тумбочка, дерев’яна", 1360),
            new Item("img/image 31.png", "Крісло, біле", 980)
        ];
        
        public static function getAll() {
            return self::$catalog;
        }
     }
    
?>