<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    public $fillable=["name","abbr","mob","created_at","updated_at"];

    public function city(){

        return $this->hasMany("App\Models\cities","country_id");
    }
}
