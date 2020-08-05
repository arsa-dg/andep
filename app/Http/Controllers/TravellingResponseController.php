<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravellingResponse;
use App\Http\Controllers\TravellingController;

class TravellingResponseController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request){
        $new_travellingresponse = new TravellingResponse;

        $new_travellingresponse->user_id = $request["user_id"];
        $new_travellingresponse->user_name = $request["user_name"];
        $new_travellingresponse->travelling_id = $request["travelling_id"];
        $new_travellingresponse->content = $request["content"];

        $new_travellingresponse->save();

        // masih belom bener linknya
        return app('App\Http\Controllers\TravellingController')->show($request["travelling_id"]);

        // return redirect("/travelling");
    }
}
