<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    public $fillable=["name","department_id","created_at","updated_at"];

    public function department(){

        return $this->belongsTo("App\Models\category","department_id");
    }
}
