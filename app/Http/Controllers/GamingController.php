<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamingModel;
use App\Models\GamingResponseModel;
use App\Gaming;

class GamingController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $gaming = GamingModel::get_all();
        $compact = compact("gaming");
        return view("gaming.index", $compact);
    }

    public function create(){
        return view("gaming.form");
    }

    public function store(Request $request){
        $new_gaming = new Gaming;

        $new_gaming->user_id = $request["user_id"];
        $new_gaming->user_name = $request["user_name"];
        $new_gaming->title = $request["title"];
        $new_gaming->content = $request["content"];

        $new_gaming->save();

        return redirect("/gaming");
    }

    public function show($id){
        $gaming = GamingModel::find_by_id($id);
        $gamingresponse = GamingResponseModel::get_all();
        $compact = compact("gaming", "gamingresponse");
        return view("gaming.show", $compact);
    }

    public function edit($id){
        $gaming = GamingModel::find_by_id($id);
        $compact = compact("gaming");
        return view("gaming.edit", $compact);
    }

    public function update($id, Request $request){
        $gaming = Gaming::find($id);

        $gaming->user_id = $request["user_id"];
        $gaming->user_name = $request["user_name"];
        $gaming->title = $request["title"];
        $gaming->content = $request["content"];

        $gaming->save();

        return $this->show($id);
        // return redirect("/gaming"); yang ini back to index
    }

    public function destroy($id){
        $deletedgaming = GamingModel::destroy($id);
        return redirect("/gaming");
    }
}
