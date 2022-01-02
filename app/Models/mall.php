<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mall extends Model
{
    use HasFactory;
    public $fillable=["name","person","email","mobile","address","icon","created_at","updated_at"];
}
