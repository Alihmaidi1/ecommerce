<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\mall_request;
use App\Http\Controllers\Controller;
use App\Models\mall as ModelsMall;
use Illuminate\Http\Request;

class mall extends Controller
{
  
 


    public function show_mall(){

        return view("admin.mall.show_mall");
    }
    public function add_mall(){

        return view("admin.mall.add_mall");
    }

    public function save_mall(mall_request $request){

        try{
            $img2=save_img($request->icon,public_path("img/upload/mall/"));

            
            $obg=new ModelsMall();
            $obg->name=$request->name;
            $obg->person=$request->person;
            $obg->email=$request->email;
            $obg->mobile=$request->mobile;
            $obg->icon=$img2;
            $obg->address=$request->address;
            $obg->save();
        
        return redirect()->route("show_mall")->with(["success"=>"the mall was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_mall")->with(["error"=>$ex]);


        }

    }
    public function delete_mall($id){

        try{

            $mall=ModelsMall::find($id);
            $mall->delete();

            return redirect()->back()->with(["success"=>"the mall was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_mall($id){

        $mall=ModelsMall::find($id);
        return view("admin.mall.edit_mall",compact("mall"));
    }
    public function save_mall1(mall_request $request){
        try{
            $mall=ModelsMall::find($request->id);

            if(empty($request->icon)){

                $img2=$mall->icon;
            }else{

                $img2=save_img($request->icon,public_path("img/upload/mall/"));
                unlink(public_path("img/upload/mall/".$mall->icon));
            }
            $mall->update([

                "name"=>$request->name,
                "person"=>$request->person,
                "email"=>$request->email,
                "mobile"=>$request->mobile,
                "icon"=>$img2,
                "address"=>$request->address
            ]);

            return redirect()->route("show_mall")->with(["success"=>"the mall was updated"]);
        }catch(\Exception $ex){
            return redirect()->route("show_mall")->with(["error"=>"$ex"]);


        }


    }









}
