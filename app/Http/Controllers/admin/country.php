<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\country_request;
use App\Http\Controllers\Controller;
use App\Models\country as ModelsCountry;
use Illuminate\Http\Request;


class country extends Controller
{
    //

    public function add_country(){

        return view("admin.country.add_country");
    }
    public function save_country(country_request $request){

        try{

            ModelsCountry::create([

                "name"=>$request->name,
                "abbr"=>$request->abbr,
                "mob"=>$request->mob

            ]);

        return redirect()->route("show_country")->with(["success"=>"the country was Added"]); 
        }catch(\Exception){
            return redirect()->route("show_country")->with(["error"=>"we Have An Error"]); 


        }


        
    }
    public function show_country(){

        return view("admin.country.show_country");
    }

    public function delete_country($id){

        try{

            $country=ModelsCountry::find($id);
            $country->delete();
            return redirect()->back()->with(["success"=>"the country was Deleted"]);
        }catch(\Exception){

            return redirect()->back()->with(["error"=>"we Have An error"]);

        }


    }
    public function edit_country($id){

            $country=ModelsCountry::find($id);
           
            return view("admin.country.edit",compact("country"));

    }


    public function save_country1(country_request $request){

        try{

            $country=ModelsCountry::find($request->id);
            $country->update([

                "name"=>$request->name,
                "abbr"=>$request->abbr,
                "mob"=>$request->mob

            ]);
            return redirect()->route("show_country")->with(["success"=>"the Country was Updated"]);
        }catch(\Exception){

            return redirect()->route("show_country")->with(["error"=>"we Have An Error"]);

        }

    }
}
