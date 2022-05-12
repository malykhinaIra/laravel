<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use PhpOption\None;

    class Item extends Model
    
    {
        protected $catalog = [
            array("image"=>"../img/image 24.png", "description"=>"Стілець, дерев’яний", "price"=>"800"),
            array("image"=>"../img/image 25.png", "description"=>"Крісло, дерево & шкіра", "1300"),
            array("image"=>"../img/image 26.png", "description"=>"Настінна картина", "1230"),
            array("image"=>"../img/image 27 (1).png", "description"=>"Журнальний столик", "980"),
            array("image"=>"../img/image 35.png", "description"=>"Тумбочка з відділами", "780"),
            array("image"=>"../img/image 37.png", "description"=>"Диван розкладний", "3220"),
            array("image"=>"../img/image 36.png", "description"=>"Тумбочка, дерев’яна", "1360"),
            array("image"=>"../img/image 31.png", "description"=>"Крісло, біле", "980")
        ];

        function get_image(){
            return $catalog["image"];
        }

        function get_description(){
            return $this->description;
        }

        function get_price(){
            return $this->price;
        }

        public static function getAll() {
            return self::$catalog;
        }
     }
    
    
?>