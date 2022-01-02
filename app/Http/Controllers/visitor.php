<?php

namespace App\Http\Controllers;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use App\Models\visitor  as ModelVisitor;
class visitor extends Controller
{
    //

   public function show(){

    return view("admin.visitor.show");
   }
}
