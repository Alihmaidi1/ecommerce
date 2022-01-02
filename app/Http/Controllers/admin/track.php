<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\track as ModelsTrack;
use Illuminate\Http\Request;
use App\Http\Requests\track_request;
class track extends Controller
{
    
    


    public function show_track(){

        return view("admin.track.show_track");
    }
    public function add_track(){

        return view("admin.track.add_track");
    }

    public function save_track(track_request $request){

        try{
            $img2=save_img($request->icon,public_path("img/upload/track/"));

            
            $obg=new ModelsTrack();
            $obg->name=$request->name;
            $obg->person=$request->person;
            $obg->facebook=$request->facebook;
            $obg->website=$request->website;
            $obg->icon=$img2;
            $obg->address=$request->address;
            $obg->save();
        
        return redirect()->route("show_track")->with(["success"=>"the track was created successfully"]);

        }catch(\Exception $ex){
            return redirect()->route("show_track")->with(["error"=>$ex]);


        }

    }
    public function delete_track($id){

        try{

            $track=ModelsTrack::find($id);
            $track->delete();

            return redirect()->back()->with(["success"=>"the track was deleted"]);
        }catch(\Exception ){
            return redirect()->back()->with(["error"=>"we Have An Error "]);


        }
    }

    public function edit_track($id){

        $track=ModelsTrack::find($id);
        return view("admin.track.edit_track",compact("track"));
    }
    public function save_track1(track_request $request){
        try{
            $track=ModelsTrack::find($request->id);

            if(empty($request->icon)){

                $img2=$track->icon;
            }else{

                $img2=save_img($request->icon,public_path("img/upload/track/"));
                unlink(public_path("img/upload/track/".$track->icon));

            }
            $track->update([

                "name"=>$request->name,
                "person"=>$request->person,
                "facebbok"=>$request->facebook,
                "website"=>$request->website,
                "icon"=>$img2,
                "address"=>$request->address
            ]);

            return redirect()->route("show_track")->with(["success"=>"the track was updated"]);
        }catch(\Exception $ex){
            return redirect()->route("show_track")->with(["error"=>"$ex"]);


        }


    }








}
