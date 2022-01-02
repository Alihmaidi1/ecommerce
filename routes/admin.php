<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get("/department_id","App\Http\Controllers\admin\department@get_department");


Route::group(
    ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
        Route::group(["prefix"=>"admin"],function(){
            Config::set("auth.defaults.guard","admin");

            Route::get("/s",function(){return view("style.index");});
            Route::get("/forgetpass","App\Http\Controllers\admin\login@forgetpassword")->name("forgetpassword");
            Route::post("/forgetpass","App\Http\Controllers\admin\login@post_forget")->name("post_forgetpassword");
            Route::get("/change_pass","App\Http\Controllers\admin\login@change_pass")->name("change_pass");
            Route::post("/post_change","App\Http\Controllers\admin\login@post_change")->name("post_change");
            Route::get("/login","App\Http\Controllers\admin\login@login");
            Route::post("/login","App\Http\Controllers\admin\login@post_login");
            Route::group(["middleware"=>"admin:admin"],function(){
                Route::get("/show_user","App\Http\Controllers\admin\login@show_user")->name("show_user");
                Route::get("/show_admin","App\Http\Controllers\admin\shows@show_admin")->name("show_admin");
                Route::get("Delete_user/{id}","App\Http\Controllers\user\operation@delete_user");
                Route::get("edit_user/{id}","App\Http\Controllers\user\operation@edit_user");
                Route::get("/add_user","App\Http\Controllers\user\operation@add_user")->name("add_user");
                Route::post("/save_user","App\Http\Controllers\user\operation@save_user")->name("save_user");
                Route::post("/change_user","App\Http\Controllers\user\operation@change_user")->name("change_user");
                Route::get("/add_country","App\Http\Controllers\admin\country@add_country")->name("add_country");
                Route::post("/add_country","App\Http\Controllers\admin\country@save_country")->name("save_country");
                Route::get("/show_country","App\Http\Controllers\admin\country@show_country")->name("show_country");
                Route::get("Delete_country/{id}","App\Http\Controllers\admin\country@delete_country");
                Route::get("edit_country/{id}","App\Http\Controllers\admin\country@edit_country");
                Route::post("/change_country","App\Http\Controllers\admin\country@save_country1")->name("change_country");
                Route::get("/show_cities","App\Http\Controllers\admin\city@show_cities")->name("show_cities");
                Route::GET("/add_city","App\Http\Controllers\admin\city@add_city")->name("add_city");
                Route::post("/save_city","App\Http\Controllers\admin\city@save_city")->name("save_city"); 
                Route::get("Delete_city/{id}","App\Http\Controllers\admin\city@delete_city");
                Route::get("/edit_city/{id}","App\Http\Controllers\admin\city@edit_city")->name("edit_city");
                Route::post("/change_city","App\Http\Controllers\admin\city@save_city1")->name("change_city");
                Route::get("/show_department","App\Http\Controllers\admin\department@show_department")->name("show_department");
                Route::get("/add_department","App\Http\Controllers\admin\department@add_department")->name('add_department');
                Route::post("/save_department","App\Http\Controllers\admin\department@save_department")->name("save_department");
                Route::get("Delete_department/{id}","App\Http\Controllers\admin\department@delete_department");
                Route::get("/edit_department/{id}","App\Http\Controllers\admin\department@edit_department")->name("edit_department");
                Route::post("/change_department","App\Http\Controllers\admin\department@save_department1")->name("change_department"); 
                Route::get("/show_factory","App\Http\Controllers\admin\\factory@show_factory")->name("show_factory");
                Route::get("/add_factory","App\Http\Controllers\admin\\factory@add_factory")->name('add_factory');
                Route::post("/save_factory","App\Http\Controllers\admin\\factory@save_factory")->name("save_factory");
                Route::get("Delete_factory/{id}","App\Http\Controllers\admin\\factory@delete_factory");
                Route::get("/edit_factory/{id}","App\Http\Controllers\admin\\factory@edit_factory")->name("edit_factory");
                Route::post("/change_factory","App\Http\Controllers\admin\\factory@save_factory1")->name("change_factory"); 
                
                Route::get("/show_track","App\Http\Controllers\admin\\track@show_track")->name("show_track");
                Route::get("/add_track","App\Http\Controllers\admin\\track@add_track")->name('add_track');
                Route::post("/save_track","App\Http\Controllers\admin\\track@save_track")->name("save_track");
                Route::get("Delete_track/{id}","App\Http\Controllers\admin\\track@delete_track");
                Route::get("/edit_track/{id}","App\Http\Controllers\admin\\track@edit_track")->name("edit_track");
                Route::post("/change_track","App\Http\Controllers\admin\\track@save_track1")->name("change_track"); 
                   
                Route::get("/show_mall","App\Http\Controllers\admin\\mall@show_mall")->name("show_mall");
                Route::get("/add_mall","App\Http\Controllers\admin\\mall@add_mall")->name('add_mall');
                Route::post("/save_mall","App\Http\Controllers\admin\\mall@save_mall")->name("save_mall");
                Route::get("Delete_mall/{id}","App\Http\Controllers\admin\\mall@delete_mall");
                Route::get("/edit_mall/{id}","App\Http\Controllers\admin\\mall@edit_mall")->name("edit_mall");
                Route::post("/change_mall","App\Http\Controllers\admin\\mall@save_mall1")->name("change_mall"); 
             
                Route::get("/show_color","App\Http\Controllers\admin\\color@show_color")->name("show_color");
                Route::get("/add_color","App\Http\Controllers\admin\\color@add_color")->name('add_color');
                Route::post("/save_color","App\Http\Controllers\admin\\color@save_color")->name("save_color");
                Route::get("Delete_color/{id}","App\Http\Controllers\admin\\color@delete_color");
                Route::get("/edit_color/{id}","App\Http\Controllers\admin\\color@edit_color")->name("edit_color");
                Route::post("/change_color","App\Http\Controllers\admin\\color@save_color1")->name("change_color"); 
                         
                Route::get("/show_size","App\Http\Controllers\admin\\size@show_size")->name("show_size");
                Route::get("/add_size","App\Http\Controllers\admin\\size@add_size")->name('add_size');
                Route::post("/save_size","App\Http\Controllers\admin\\size@save_size")->name("save_size");
                Route::get("Delete_size/{id}","App\Http\Controllers\admin\\size@delete_size");
                Route::get("/edit_size/{id}","App\Http\Controllers\admin\\size@edit_size")->name("edit_size");
                Route::post("/change_size","App\Http\Controllers\admin\\size@save_size1")->name("change_size"); 
             
                Route::get("/show_product","App\Http\Controllers\admin\\product@show_product")->name("show_product");
                Route::get("/add_product","App\Http\Controllers\admin\\product@add_product")->name('add_product');
                Route::post("/save_product","App\Http\Controllers\admin\\product@save_product")->name("save_product");
                Route::get("Delete_product/{id}","App\Http\Controllers\admin\\product@delete_product");
                Route::get("/edit_product/{id}","App\Http\Controllers\admin\\product@edit_product")->name("edit_product");
                Route::post("/change_product","App\Http\Controllers\admin\\product@save_product1")->name("change_product"); 
                Route::get("/show/department_product/{id}","App\Http\Controllers\admin\\product@show_department_product")->name("show_department_product");

                Route::get("/show_visitor","App\Http\Controllers\\visitor@show")->name("show_visitor");

                Route::get("/show_order","App\Http\Controllers\\order@show")->name("show_order");

                 Route::get("/add_todolist","App\Http\Controllers\admin\\todolist@add_todolist")->name("add_todolist");
                 Route::get("/edit_todolist/{id}","App\Http\Controllers\admin\\todolist@edit_todolist")->name("edit_todolist");
                 

                 Route::post("/save_todolist","App\Http\Controllers\admin\\todolist@save")->name("save_task");
                 Route::post("/change_todolist","App\Http\Controllers\admin\\todolist@change_todolist")->name("change_todolist");

                 Route::get("/delete_todolist/{id}","App\Http\Controllers\admin\\todolist@delete");



                Route::get("/show_area","App\Http\Controllers\admin\area@show_area")->name("show_area");
                Route::GET("/add_area","App\Http\Controllers\admin\area@add_area")->name("add_area");
                Route::post("/save_area","App\Http\Controllers\admin\area@save_area")->name("save_area"); 
                Route::get("Delete_area/{id}","App\Http\Controllers\admin\area@delete_area");
                Route::get("/edit_area/{id}","App\Http\Controllers\admin\area@edit_area")->name("edit_area");
                Route::post("/change_area","App\Http\Controllers\admin\area@save_area1")->name("change_area");
                
                
                
                
                
                Route::get("/settings","App\Http\Controllers\admin\login@settings")->name("settings");
                Route::post("/add_setting","App\Http\Controllers\admin\login@add_setting")->name("add_setting");
                Route::get("/",function(){return view("admin.index");})->name("admin.index");
                Route::any("/logout","App\Http\Controllers\admin\login@logout")->name("logout");
                Route::get("/add_admin","App\Http\Controllers\admin\login@add")->name("add_admin");
                Route::post("/add_admin","App\Http\Controllers\admin\login@save_admin")->name("save_admin");
                Route::get("Delete_admin/{id}","App\Http\Controllers\admin\login@delete_admin")->name("delete_admin");
                Route::get("edit_admin/{id}","App\Http\Controllers\admin\login@edit_admin")->name("edit_admin");
                Route::post("edit_admin/","App\Http\Controllers\admin\login@change_admin")->name("change_admin");
                
            });
    
    });
    
    
    });
