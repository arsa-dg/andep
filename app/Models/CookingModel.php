<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CookingModel {

    public static function get_all(){
        $cooking = DB::table("cooking")->get();
        return $cooking;
    }

    public static function find_by_id($id){
        $cooking = DB::table("cooking")->where("id", $id)->first();
        return $cooking;
    }

    public static function destroy($id){
        $deleted = DB::table("cooking")
                        ->where("id", $id)
                        ->delete();
        return $deleted;
    }

}