<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class TechnologyResponseModel {

    public static function get_all(){
        $technologyresponse = DB::table("technologyresponse")->get();
        return $technologyresponse;
    }

}