<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class order extends Controller
{
    public function show(){

        return view("admin.show_order");
    }
}
