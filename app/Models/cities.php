<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;
    public $fillable=["name","country_id","created_at","updated_at"];

    public function country(){

        return $this->belongsTo("App\Models\country","country_id");
    }

    public function area(){

        return $this->hasMany("App\Models\area","city_id");
    }
}
