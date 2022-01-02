<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $fillable=["user_id","product_id","quantity","total","status","created_at","updated_at"];

    public function user(){

        return $this->belongsTo("App\Models\User","user_id");
    }

    public function product(){

        return $this->belongsTo("App\Models\product","product_id");
    }
}
