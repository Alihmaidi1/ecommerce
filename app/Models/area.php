<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;
    public $fillable=["name","city_id","created_at","updated_at"];

    public function city(){

        return $this->belongsTo("App\Models\cities","city_id");
    }
}
