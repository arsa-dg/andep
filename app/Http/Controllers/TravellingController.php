<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravellingModel;
use App\Models\TravellingResponseModel;
use App\Travelling;

class TravellingController extends Controller
{
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $travelling = TravellingModel::get_all();
        $compact = compact("travelling");
        return view("travelling.index", $compact);
    }

    public function create(){
        return view("travelling.form");
    }

    public function store(Request $request){
        $new_travelling = new Travelling;

        $new_travelling->user_id = $request["user_id"];
        $new_travelling->user_name = $request["user_name"];
        $new_travelling->title = $request["title"];
        $new_travelling->content = $request["content"];

        $new_travelling->save();

        return redirect("/travelling");
    }

    public function show($id){
        $travelling = TravellingModel::find_by_id($id);
        $travellingresponse = TravellingResponseModel::get_all();
        $compact = compact("travelling", "travellingresponse");
        return view("travelling.show", $compact);
    }

    public function edit($id){
        $travelling = TravellingModel::find_by_id($id);
        $compact = compact("travelling");
        return view("travelling.edit", $compact);
    }

    public function update($id, Request $request){
        $travelling = Travelling::find($id);

        $travelling->user_id = $request["user_id"];
        $travelling->user_name = $request["user_name"];
        $travelling->title = $request["title"];
        $travelling->content = $request["content"];

        $travelling->save();

        return $this->show($id);
        // return redirect("/travelling"); yang ini back to index
    }

    public function destroy($id){
        $deletedtravelling = TravellingModel::destroy($id);
        return redirect("/travelling");
    }
}
