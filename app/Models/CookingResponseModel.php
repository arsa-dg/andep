<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CookingResponseModel {

    public static function get_all(){
        $cookingresponse = DB::table("cookingresponse")->get();
        return $cookingresponse;
    }

}