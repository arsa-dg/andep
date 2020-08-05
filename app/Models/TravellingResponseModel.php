<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class TravellingResponseModel {

    public static function get_all(){
        $travellingresponse = DB::table("travellingresponse")->get();
        return $travellingresponse;
    }

}