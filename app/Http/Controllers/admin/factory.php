<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\factory1;
use Illuminate\Http\Request;
use App\Http\Requests\factory_request;
class factory extends Controller
{
    


    public function show_factory(){

        return view("admin.factory.show_factory");
    }
    public function add_factory(){

        return view("admin.factory.add_factory");
    }

    public function save_factory(factory_request $request){

        try{
            $img2=save_img($request->icon,public_path("img/upload/factory/"));

            $obg=new factory1();
            $obg->name=$request->name;
            $obg->person=$request->person;
            $obg->mobile=$request->mobile;
            $obg->email=$request->email;
            $obg->facebook=$request->facebook;
            $obg->icon=$img2;
            $obg->address=$request->address;
            $obg->save();
        
        return redirect()->route("show_factory")->with(["success"=>"the factory was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_factory")->with(["error"=>$ex]);


        }

    }
    public function delete_factory($id){

        try{

            $factory=factory1::find($id);
            $factory->delete();

            return redirect()->back()->with(["success"=>"the factory was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_factory($id){

        $factory=factory1::find($id);
        return view("admin.factory.edit_factory",compact("factory"));
    }
    public function save_factory1(factory_request $request){
        try{
            $factory=factory1::find($request->id);

            if(empty($request->icon)){

                $img2=$factory->icon;
            }else{

                $img2=save_img($request->icon,public_path("img/upload/factory/"));
                unlink(public_path("img/upload/factory/".$factory->icon));
            }
            $factory->update([

                "name"=>$request->name,
                "person"=>$request->person,
                "mobile"=>$request->mobile,
                "email"=>$request->email,
                "facebbok"=>$request->facebook,
                "icon"=>$img2,
                "address"=>$request->address
            ]);

            return redirect()->route("show_factory")->with(["success"=>"the factory was updated"]);
        }catch(\Exception){
            return redirect()->route("show_factory")->with(["error"=>"we have An Error"]);


        }


    }






}
