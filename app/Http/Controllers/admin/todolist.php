<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\todolist as ModelsTodolist;
use Illuminate\Http\Request;
use App\Http\Requests\todolist_request;
class todolist extends Controller
{
    //

    public function add_todolist(){

        return view("admin.todolist.add_todolist");
    }

    public function save(todolist_request $request){

        try{

            ModelsTodolist::create([

                "content"=>$request->content,
                "end_at"=>$request->end_at
            ]);

            return redirect("/admin")->with(["success"=>"the Task was Created"]);

        }catch(\Exception){

            return redirect()->back()->with(["error"=>"Error in Add Task"]);
        }


    }


    public function edit_todolist($id){

        try{
            $todolist1=ModelsTodolist::find($id);
            return view("admin.todolist.edit",compact("todolist1"));

        }catch(\Exception){

            return redirect()->back()->with(["error"=>"Error Edit task"]);
        }

    }


    public function change_todolist(todolist_request $request){

        try{

            $todolist1=ModelsTodolist::find($request->id);

            $todolist1->update([

                "content"=>$request->content,
                "end_at"=>$request->end_at
            ]);

            return redirect("/admin")->with(["success"=>"the task Was Updated"]);

        }catch(\Exception){
            return redirect("/admin")->with(["error"=>"Error Updated Task"]);


        }


    }


    public function delete($id){

        try{
            $todolist1=ModelsTodolist::find($id);

            $todolist1->delete();
 

            return redirect("/admin")->with(["success"=>"the task  was deleted successfully"]);

        }catch(\Exception ){

            return redirect("/admin")->with(["error"=>"Error deleted the task"]);

        }

    }
}
