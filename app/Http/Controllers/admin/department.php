<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Http\Requests\department_request;
class department extends Controller
{
    //
    public function show_department(){

        return view("admin.department.show_department");
    }

    public function add_department(){

        return view("admin.department.add_department");
    }
    public function save_department(department_request $request){

        try{
            $img2=save_img($request->icon,public_path("img/upload/department/"));
            // return dd($request);
            category::create([

                "name"=>$request->name,
                "description"=>$request->description,
                "keyword"=>$request->keyword,
                "icon"=>$img2,
                "parent"=>$request->department
            ]);

            return redirect()->route("show_department")->with(["success"=>"the department was Created"]);

        }catch(\Exception $ex){

            return redirect()->route("show_department")->with(["error"=>$ex]);

        }


    }
    public function delete_department($id){

        try{

            $country=category::find($id);
            $country->delete();
            return redirect()->back()->with(["success"=>"the country was Deleted"]);
        }catch(\Exception){

            return redirect()->back()->with(["error"=>"we Have An error"]);

        }


    }


    public function edit_department($id){

        $department=category::find($id);
       
        return view("admin.department.edit",compact("department"));

}


public function save_department1(department_request $request){

    try{
        $department1=category::find($request->id);

        if(empty($request->icon)){
            $img1=$department1->icon;
        }else{

            $img1=save_img($request->icon,public_path("img/upload/department/"));
            unlink(public_path("img/upload/department/".$department1->icon));
        }

        $department1->update([

            "name"=>$request->name,
            "description"=>$request->description,
            "keyword"=>$request->keyword,
            "parent"=>$request->parent,
            "icon"=>$img1
        ]);
        return redirect()->route("show_department")->with(["success"=>"the department was Updated"]);
    }catch(\Exception){

        return redirect()->route("show_department")->with(["error"=>"we Have An Error"]);

    }

}


public function get_department(Request $request){

    $departments=category::find($request->get("id"))->size;
    $text="";
    foreach($departments as $obg){

        $text.="<option value=".$obg->id.">".$obg->name."</option>";
    }

    return $text;
}



}
