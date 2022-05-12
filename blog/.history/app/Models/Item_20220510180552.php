<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Item extends Model
    {
        protected $image, $description, $price;
        function __construct($image, $description, $price)
        {
            $this->image = "../" . $image;
            $this->description = $description;
            $this->price = $price . " грн";
        }
        
        function get_image(){
            return $this->image;
        }

        function get_description(){
            return $this->description;
        }

        function get_price(){
            return $this->price;
        }
     }
    
?>