<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TechnologyResponse;
use App\Http\Controllers\TechnologyController;

class TechnologyResponseController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request){
        $new_technologyresponse = new TechnologyResponse;

        $new_technologyresponse->user_id = $request["user_id"];
        $new_technologyresponse->user_name = $request["user_name"];
        $new_technologyresponse->technology_id = $request["technology_id"];
        $new_technologyresponse->content = $request["content"];

        $new_technologyresponse->save();

        // masih belom bener linknya
        return app('App\Http\Controllers\TechnologyController')->show($request["technology_id"]);

        // return redirect("/technology");
    }
}
