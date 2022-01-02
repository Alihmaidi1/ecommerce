<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class order extends Controller
{
 
    public function show_order(){

        return view("style.order.show_order");
    }
 
}
