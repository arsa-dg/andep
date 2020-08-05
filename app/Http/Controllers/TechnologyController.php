<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnologyModel;
use App\Models\TechnologyResponseModel;
use App\Technology;

class TechnologyController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $technology = TechnologyModel::get_all();
        $compact = compact("technology");
        return view("technology.index", $compact);
    }

    public function create(){
        return view("technology.form");
    }

    public function store(Request $request){
        $new_technology = new Technology;

        $new_technology->user_id = $request["user_id"];
        $new_technology->user_name = $request["user_name"];
        $new_technology->title = $request["title"];
        $new_technology->content = $request["content"];

        $new_technology->save();

        return redirect("/technology");
    }

    public function show($id){
        $technology = TechnologyModel::find_by_id($id);
        $technologyresponse = TechnologyResponseModel::get_all();
        $compact = compact("technology", "technologyresponse");
        return view("technology.show", $compact);
    }

    public function edit($id){
        $technology = TechnologyModel::find_by_id($id);
        $compact = compact("technology");
        return view("technology.edit", $compact);
    }

    public function update($id, Request $request){
        $technology = Technology::find($id);

        $technology->user_id = $request["user_id"];
        $technology->user_name = $request["user_name"];
        $technology->title = $request["title"];
        $technology->content = $request["content"];

        $technology->save();

        return $this->show($id);
        // return redirect("/technology"); yang ini back to index
    }

    public function destroy($id){
        $deletedtechnology = TechnologyModel::destroy($id);
        return redirect("/technology");
    }
}
