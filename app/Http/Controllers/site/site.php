<?php

namespace App\Http\Controllers\site;
use App\Models\visitor  as ModelVisitor;
use Stevebauman\Location\Facades\Location;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class site extends Controller
{
    //

    public function show(){

        $ip=request()->ip();
        $found=ModelVisitor::where("ip",$ip)->get();
        if(count($found)==0)
        {
            $obg=Location::get();
            ModelVisitor::create([
            "ip"=>$ip,
            "address"=>$obg->countryName,
            "name_region"=>$obg->regionName,
            "city_name"=>$obg->cityName,
            ]);
        }
        return view('style.index');

    }


    public function login(){

        return view("style.login.login");
    }
    public function register(){

        return view("style.login.resgister");
    }
    public function forget(){

        return view("style.login.forget");
    }

    public function save_login_style(Request $request){

        $user=User::where("email",$request->email)->where("password",$request->password)->first();
        if(empty($user)){

            return redirect()->back()->with(["error"=>"the emai or password is not correct"]);

        }else{

            auth()->login($user);
            return redirect()->route("show_style_user");


        }
    }

    public function logout_style(){
        
        auth()->logout();
        return redirect()->back();
    }
    public function register_style(Request $request){

        try{
            $user1=User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password,
                "level"=>$request->level
            ]);
            $user1=User::where("id",$user1->id)->first();
            auth()->login($user1);
    
            return redirect()->route("show_style_user");
        }catch(\Exception){

            return redirect()->back()->with(["error"=>"You   Have Error in Register"]);
            

        }


    }


    public function show_category(){

        return view("style.category.show_category");
    }
}
