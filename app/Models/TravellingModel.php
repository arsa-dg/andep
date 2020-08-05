<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class TravellingModel {

    public static function get_all(){
        $travelling = DB::table("travelling")->get();
        return $travelling;
    }

    public static function find_by_id($id){
        $travelling = DB::table("travelling")->where("id", $id)->first();
        return $travelling;
    }

    public static function destroy($id){
        $deleted = DB::table("travelling")
                        ->where("id", $id)
                        ->delete();
        return $deleted;
    }

}