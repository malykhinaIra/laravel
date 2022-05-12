<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Item extends Model
    {
        public $image, $description, $price;
        function __construct($image, $description, $price)
        {
            $this->image = "../" . $image;
            $this->description = $description;
            $this->price = $price . " грн";
        }
     }
    
?>