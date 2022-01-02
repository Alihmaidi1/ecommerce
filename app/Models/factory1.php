<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factory1 extends Model
{
    use HasFactory;
    public $table="factories";
    public $fillable=["name","person","mobile","email","facebook","address","icon","created_at","updated_at"];

}
