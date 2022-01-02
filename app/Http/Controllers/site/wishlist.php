<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class wishlist extends Controller
{
    //

    public function show_wishlist(){

        return view("style.wishlist.show_wishlist");
    }
}
