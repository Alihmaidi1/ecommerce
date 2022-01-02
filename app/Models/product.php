<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $fillable=["title","content","department_id","color_id","size_id","price","photo","numbers","end_at","start_at","start_offer_at","price_offer","end_offer_at","factory_id","status","size","weight","created_at","updated_at"];

    public function order(){

        return $this->hasMany("App\Models\order","product_id");
    }


}
