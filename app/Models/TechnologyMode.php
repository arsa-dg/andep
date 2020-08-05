<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class TechnologyModel {

    public static function get_all(){
        $technology = DB::table("technology")->get();
        return $technology;
    }

    public static function find_by_id($id){
        $technology = DB::table("technology")->where("id", $id)->first();
        return $technology;
    }

    public static function destroy($id){
        $deleted = DB::table("technology")
                        ->where("id", $id)
                        ->delete();
        return $deleted;
    }

}