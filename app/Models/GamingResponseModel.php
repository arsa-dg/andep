<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class GamingResponseModel {

    public static function get_all(){
        $gamingresponse = DB::table("gamingresponse")->get();
        return $gamingresponse;
    }

}