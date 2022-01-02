<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    public $fillable=["name","email","password","created_at","updated_at"];
    public $hidden=["remember_token"];
}
