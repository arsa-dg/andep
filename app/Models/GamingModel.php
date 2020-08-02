<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class GamingModel {

    public static function get_all(){
        $gaming = DB::table("gaming")->get();
        return $gaming;
    }

    public static function find_by_id($id){
        $gaming = DB::table("gaming")->where("id", $id)->first();
        return $gaming;
    }

    public static function destroy($id){
        $deleted = DB::table("gaming")
                        ->where("id", $id)
                        ->delete();
        return $deleted;
    }

}