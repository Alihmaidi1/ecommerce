<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class product extends Controller
{
    //

    public function show_product_detail(){

        return view("style.product.show_product_detail");
    }
}
