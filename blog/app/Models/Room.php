<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected static $rooms = ['СПАЛЬНЯ', 'КУХНЯ', 'ОФІС', 'ВІТАЛЬНЯ', 'ПЕРЕДПОКІЙ'];

    public static function getAll() {
        return self::$rooms;
    }
}