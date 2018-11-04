<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Test
{
    protected $table = "category";
    public static function getAllCat()
    {
        $result = self::orderBy('id', 'DESC')->get()->toArray();
        return $result;
    }
}
