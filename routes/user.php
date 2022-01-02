<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;

Route::group(["middleware"=>"status_site"],function(){

    Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){ 
        Route::get("/","App\Http\controllers\site\site@show")->name("show_style_user");
        Config::set("auth.defaults.guard","web");
        Route::get("/login","App\Http\controllers\site\site@login")->name("login_style");
        Route::get("/register","App\Http\controllers\site\site@register")->name("register_style");
        Route::get("/forget","App\Http\controllers\site\site@forget")->name("forget_style");
        Route::post("/save_login","App\Http\controllers\site\site@save_login_style")->name("login_user");
        Route::get("/logout","App\Http\controllers\site\site@logout_style")->name("logout_style");
        Route::post("/register_style","App\Http\controllers\site\site@register_style")->name("register_style_save");
        Route::get("/my_profile","App\Http\controllers\site\setting@my_profile")->name("my_profile");
        Route::get("/contact","App\Http\controllers\site\setting@contact")->name("contact");
        Route::get("/show_card","App\Http\controllers\site\cart@show_card")->name("show_card");
        Route::get("/show_order","App\Http\controllers\site\order@show_order")->name("show_order");
        Route::get("/show_wishlist","App\Http\controllers\site\wishlist@show_wishlist")->name("show_wishlist");
        Route::get("/show_category","App\Http\controllers\site\site@show_category")->name("show_category");
        Route::get("/show_product_detail","App\Http\controllers\site\product@show_product_detail")->name("show_product_detail");
        Route::get("/edit_user/{id}","App\Http\controllers\site\setting@edit_user");
        Route::post("/save_user_edit_style","App\Http\controllers\site\setting@save_user_edit_style")->name("save_user_edit_style");
    
        Route::get('/dd',function(){

            dd(Crypt::getKey('$2y$10$xq7pgXab2emu4TZ00v5kgO4MKf938PYngTL9.RDYj0uQ2weP/kTHy'));
        });


        });

        
    
    








});






