<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\user as requestuser; 

class operation extends Controller
{
    

    public function delete_user($id){
        try{


            $user=User::find($id);
            $user->delete();
            return redirect()->back()->with(["success"=>"the Account was Deleted"]);
        }catch(\Exception){
            return redirect()->back()->with(["error"=>"we Have An Error"]);



        }
    }

    public function add_user(){


        return view("user/add_user");
    }

    public function save_user(requestuser $request){

        try{


            User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password,
                "level"=>$request->level
    
            ]);
            return redirect()->route("show_user")->with(["success"=>"the Acoount was Created"]);
        }catch(\Exception){

            return redirect()->route("show_user")->with(["error"=>"we Have  An Error"]);

        }

    }

    public function edit_user($id){
        
        $user=User::find($id);
        return view("user/edit_user",compact("user"));


    }

    public function change_user(requestuser $request){

        try{

            $user=User::find($request->id);
            $user->update([
                
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password,
                "level"=>$request->level,



            ]);
            return redirect()->route("show_user")->with(["success"=>"the Account was Updated"]);

        }catch(\Exception){

            return redirect()->route("show_user")->with(["error"=>"we Have an Error"]);

        }
    }
}
