<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\area as ModelsArea;
use Illuminate\Http\Request;
use App\Http\Requests\area_request;
class area extends Controller
{


    public function show_area(){

        return view("admin.area.show_area");
    }
    public function add_area(){

        return view("admin.area.add_area");
    }

    public function save_area(area_request $request){

        try{

        ModelsArea::create([
            "name"=>$request->name,
            "city_id"=>$request->city
        ]);        
        
        return redirect()->route("show_area")->with(["success"=>"the area was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_area")->with(["error"=>$ex]);


        }

    }
    public function delete_area($id){

        try{

            $area=ModelsArea::find($id);
            $area->delete();

            return redirect()->back()->with(["success"=>"the area was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_area($id){

        $area=ModelsArea::find($id);
        return view("admin.area.edit_area",compact("area"));
    }
    public function save_area1(area_request $request){
        try{

            $area=ModelsArea::find($request->id);
            $area->update([

                "name"=>$request->name,
                "city_id"=>$request->city
            ]);

            return redirect()->route("show_area")->with(["success"=>"the area was updated"]);
        }catch(\Exception){
            return redirect()->route("show_area")->with(["error"=>"we have An Error"]);


        }


    }



}
