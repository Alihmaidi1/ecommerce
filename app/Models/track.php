<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;
    public $fillable=["name","address","person","icon","facebook","website","created_at","updated_at"];
}
