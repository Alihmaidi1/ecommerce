<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\color_request;
use App\Http\Controllers\Controller;
use App\Models\color as ModelsColor;
use Illuminate\Http\Request;

class color extends Controller
{
    


 


    public function show_color(){

        return view("admin.color.show_color");
    }
    public function add_color(){

        return view("admin.color.add_color");
    }

    public function save_color(color_request $request){

        try{
            
            
            $obg=new ModelsColor();
            $obg->name=$request->name;
            $obg->color=$request->color;
            $obg->save();
        
        return redirect()->route("show_color")->with(["success"=>"the color was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_color")->with(["error"=>$ex]);


        }

    }
    public function delete_color($id){

        try{

            $color=ModelsColor::find($id);
            $color->delete();

            return redirect()->back()->with(["success"=>"the color was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_color($id){

        $color=ModelsColor::find($id);
        return view("admin.color.edit_color",compact("color"));
    }
    public function save_color1(color_request $request){
        try{
            $color=ModelsColor::find($request->id);




            
            $color->update([

                "name"=>$request->name,
                "color"=>$request->color,
            ]);

            return redirect()->route("show_color")->with(["success"=>"the color was updated"]);
        }catch(\Exception $ex){
            return redirect()->route("show_color")->with(["error"=>"$ex"]);


        }


    }












}
