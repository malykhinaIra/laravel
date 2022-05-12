<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static $categories = ['СПАЛЬНЯ', 'КУХНЯ', 'ОФІС', 'ВІТАЛЬНЯ', 'ПЕРЕДПОКІЙ'];

    public static function getAll() {
        return self::$categories;
    }
}