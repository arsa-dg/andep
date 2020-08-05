<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookingModel;
use App\Models\CookingResponseModel;
use App\Cooking;

class CookingController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $cooking = CookingModel::get_all();
        $compact = compact("cooking");
        return view("cooking.index", $compact);
    }

    public function create(){
        return view("cooking.form");
    }

    public function store(Request $request){
        $new_cooking = new Cooking;

        $new_cooking->user_id = $request["user_id"];
        $new_cooking->user_name = $request["user_name"];
        $new_cooking->title = $request["title"];
        $new_cooking->content = $request["content"];

        $new_cooking->save();

        return redirect("/cooking");
    }

    public function show($id){
        $cooking = CookingModel::find_by_id($id);
        $cookingresponse = CookingResponseModel::get_all();
        $compact = compact("cooking", "cookingresponse");
        return view("cooking.show", $compact);
    }

    public function edit($id){
        $cooking = CookingModel::find_by_id($id);
        $compact = compact("cooking");
        return view("cooking.edit", $compact);
    }

    public function update($id, Request $request){
        $cooking = Cooking::find($id);

        $cooking->user_id = $request["user_id"];
        $cooking->user_name = $request["user_name"];
        $cooking->title = $request["title"];
        $cooking->content = $request["content"];

        $cooking->save();

        return $this->show($id);
        // return redirect("/cooking"); yang ini back to index
    }

    public function destroy($id){
        $deletedcooking = CookingModel::destroy($id);
        return redirect("/cooking");
    }
}
