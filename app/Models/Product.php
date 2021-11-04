<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllData(){
        $jsonString = file_get_contents(base_path('resources/lang/foodie-rev.json'));
        return $data = json_decode($jsonString, true);
    }
}
