<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\admin as request_admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\setting;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\setting as setting_request;
class login extends Controller
{
    //
    public function login(){

        return view("admin.login");
    }
    public function logout(){

        auth()->guard('admin')->logout();
        return redirect("/admin/login");
        
    }
    public function forgetpassword(){
 
        return view("admin.password.forgetpassword");
    }

    public function change_pass(){

        return view("admin.password.change_pass");
    }
    public function post_change(Request $request){
        $user=Admin::where("id",$request->id)->first();
        
        $user->update(['password'=>bcrypt($request->password1)]);
        $user=Admin::where("id",$request->id)->first();
        Auth::guard("admin")->login($user);
        return view("admin.index");
        
    }

    public function post_forget(Request $request){

        $admin=Admin::where("email",$request->email)->first();
        if(!empty($admin)){
 
            $id=$admin->id;
            Mail::to($request->email)->send(new \App\Mail\reset_pass($id));
            return view("admin.password.message_forget");

        }else{

            return redirect()->back()->with(["error"=>"this email is not admin"]);

        }

    }
    public function post_login(Request $request){

        if(auth()->guard("admin")->attempt(['email'=>$request->email,"password"=>$request->password])){

                 return redirect()->route("admin.index");
        }else{

            return redirect()->back()->with(["error"]);
        }

    }
    public function add(){

        return view("admin.admin_process.add_admin");
    }
    public function save_admin(request_admin $request){

        try{

            Admin::create([

                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password

            ]);
            return redirect()->route("show_admin")->with(["success"=>"the Account is Created"]);
        }
        catch(\Exception){
            return redirect()->route("show_admin")->with(["error"=>"We Havee an Error"]);


        }
    }
    public function delete_admin($id){
        try{

            Admin::find($id)->delete();
            return redirect()->back()->with(["success"=>"the Account is Deleted successfully"]);
    

        }catch(\Exception){
            return redirect()->back()->with(["Error"=>"We Have Error"]);


        }

    }
    public function edit_admin($id){

        $user=Admin::find($id);
        return view("admin.admin_process.edit",compact("user"));
    }
    public function change_admin(request_admin $request){

        try{

            $user=Admin::find($request->id);
            $user->update([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password
            ]);

            return redirect()->route("show_admin")->with(["success"=>"the Account updated Successfully"]);
        }catch(\Exception){
            return redirect()->route("show_admin")->with(["Error"=>"We Have An Error"]);


        }
        

    }
    public function show_user(){

        return view("user/show_user");
    }
    public function settings(){

        return view("admin/setting");
    }
    public function add_setting(setting_request $request){
        try{

            $name_img=save_img($request->logo,public_path('img/setting'));
            $setting1=setting::find(1);
            $setting1->update([
                "name_eng"=>$request->name_eng,
                "name_ar"=>$request->name_ar,
                "email"=>$request->Email,
                "logo"=>$name_img,
                "description"=>$request->description,
                "keywords"=>$request->keyword,
                "status"=>$request->status,
                "message"=>$request->message
            ]);

            return redirect()->route("show_admin");
        }catch(\Exception){

            return redirect()->route("show_admin");


        }
      

    }

}
