<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cart extends Controller
{
    
    public function show_card(){


        return view('style.cart.show_cart');
    }


}
