<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    public $fillable=["name","color","created_at","updated_at"];
}
