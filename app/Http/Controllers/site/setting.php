<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class setting extends Controller
{


    public function my_profile(){

        return view("style.account.profile");
    }


    public function contact(){

        return view("style.account.contact");
    }

    public function edit_user($id){

        try{

            $user=User::find($id);

            return view("style.account.edit_user",compact("id"));

        }catch(\Exception){

            return redirect()->back()->with(["error"=>"We Have An error"]);
        }


    }


    public function save_user_edit_style(Request $request){

        try{

            $user=User::find($request->id);
            $user->update([

                "name"=>$request->name,
                "password"=>$request->password,
                "level"=>$request->level
            ]);

            return redirect()->route("show_style_user")->with(["success"=>"you profile was updated"]);


        }catch(\Exception){

            return redirect()->route("show_style_user")->with(["error"=>"we have an error updating profile"]);


        }


    }
}
