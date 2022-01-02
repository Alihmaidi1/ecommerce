<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shows extends Controller
{

public function show_admin(){

    return view("admin.admin_process.show_admin");
}

}
