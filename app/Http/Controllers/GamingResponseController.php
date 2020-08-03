<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GamingResponse;
use App\Http\Controllers\GamingController;

class GamingResponseController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request){
        $new_gamingresponse = new GamingResponse;

        $new_gamingresponse->user_id = $request["user_id"];
        $new_gamingresponse->user_name = $request["user_name"];
        $new_gamingresponse->gaming_id = $request["gaming_id"];
        $new_gamingresponse->content = $request["content"];

        $new_gamingresponse->save();

        // masih belom bener linknya
        return app('App\Http\Controllers\GamingController')->show($request["gaming_id"]);

        // return redirect("/gaming");
    }
}
