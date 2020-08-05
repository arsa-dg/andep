<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CookingResponse;
use App\Http\Controllers\CookingController;

class CookingResponseController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request){
        $new_cookingresponse = new CookingResponse;

        $new_cookingresponse->user_id = $request["user_id"];
        $new_cookingresponse->user_name = $request["user_name"];
        $new_cookingresponse->cooking_id = $request["cooking_id"];
        $new_cookingresponse->content = $request["content"];

        $new_cookingresponse->save();

        // masih belom bener linknya
        return app('App\Http\Controllers\cookingController')->show($request["cooking_id"]);

        // return redirect("/cooking");
    }
}
