<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Item extends Model
    
    {
        protected static $catalog = [
            array("image"=>"../img/image 24.png", "description"=>"Стілець, дерев’яний", "price"=>"800 грн"),
            array("image"=>"../img/image 25.png", "description"=>"Крісло, дерево & шкіра", "1300 грн"),
            array("image"=>"../img/image 26.png", "description"=>"Настінна картина", "1230 грн"),
            array("image"=>"../img/image 27 (1).png", "description"=>"Журнальний столик", "980 грн"),
            array("image"=>"../img/image 35.png", "description"=>"Тумбочка з відділами", "780 грн"),
            array("image"=>"../img/image 37.png", "description"=>"Диван розкладний", "3220 грн"),
            array("image"=>"../img/image 36.png", "description"=>"Тумбочка, дерев’яна", "1360 грн"),
            array("image"=>"../img/image 31.png", "description"=>"Крісло, біле", "980 грн")
        ];

        function get_image(){
            return $this->catalog["image"];
        }

        function get_description(){
            return $this->catalog["description"];
        }

        function get_price(){
            return $this->catalog["price"];
        }

        public static function getAll() {
            return self::$catalog;
        }
     }
    
    
?>