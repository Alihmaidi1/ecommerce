<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cities;
use Illuminate\Http\Request;

class city extends Controller
{
    //

    public function show_cities(){

        return view("admin.city.show_cities");
    }
    public function add_city(){

        return view("admin.city.add_city");
    }

    public function save_city(Request $request){

        try{

        cities::create([
            "name"=>$request->name,
            "country_id"=>$request->country
        ]);        
        
        return redirect()->route("show_cities")->with(["success"=>"the city was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_cities")->with(["error"=>$ex]);


        }

    }
    public function delete_city($id){

        try{

            $city=cities::find($id);
            $city->delete();

            return redirect()->back()->with(["success"=>"the city was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_city($id){

        $city=cities::find($id);
        return view("admin.city.edit_city",compact("city"));
    }
    public function save_city1(Request $request){
        try{

            $city=cities::find($request->id);
            $city->update([

                "name"=>$request->name,
                "country_id"=>$request->country
            ]);

            return redirect()->route("show_cities")->with(["success"=>"the city was updated"]);
        }catch(\Exception){
            return redirect()->route("show_cities")->with(["error"=>"we have An Error"]);


        }


    }
}

