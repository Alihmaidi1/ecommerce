<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\size as ModelsSize;
use Illuminate\Http\Request;
use App\Http\Requests\size_request;
class size extends Controller
{
    


   


 


    public function show_size(){

        return view("admin.size.show_size");
    }
    public function add_size(){

        return view("admin.size.add_size");
    }

    public function save_size(size_request $request){

        try{
            
            
            $obg=new Modelssize();
            $obg->name=$request->name;
            $obg->department_id=$request->department_id;
            $obg->save();
        
        return redirect()->route("show_size")->with(["success"=>"the size was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_size")->with(["error"=>$ex]);


        }

    }
    public function delete_size($id){

        try{

            $size=Modelssize::find($id);
            $size->delete();

            return redirect()->back()->with(["success"=>"the size was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_size($id){

        $size=Modelssize::find($id);
        return view("admin.size.edit_size",compact("size"));
    }
    public function save_size1(size_request $request){
        try{
            $size=Modelssize::find($request->id);




            
            $size->update([

                "name"=>$request->name,
                "department_id"=>$request->department_id,
            ]);

            return redirect()->route("show_size")->with(["success"=>"the size was updated"]);
        }catch(\Exception $ex){
            return redirect()->route("show_size")->with(["error"=>"$ex"]);


        }


    }
}
