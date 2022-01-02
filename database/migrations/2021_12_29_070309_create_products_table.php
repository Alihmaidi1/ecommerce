<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("content");
            $table->unsignedBigInteger("department_id")->nullable();
            $table->foreign("department_id")->references("id")->on("categories")->onDelete("cascade");
            $table->unsignedBigInteger("color_id")->nullable();
            $table->foreign("color_id")->references("id")->on("colors")->onDelete("cascade");
            $table->unsignedBigInteger("size_id")->nullable();
            $table->foreign("size_id")->references("id")->on("sizes")->onDelete("cascade");
            $table->integer("price");
            $table->string("photo");
            $table->integer("numbers");
            $table->date("end_at")->nullable();
            $table->date("start_at")->nullable();
            $table->date("start_offer_at")->nullable();
            $table->integer("price_offer")->nullable();
            $table->date("end_offer_at")->nullable();
            $table->unsignedBigInteger("factory_id")->nullable();
            $table->foreign("factory_id")->references("id")->on("factories")->onDelete("cascade");
            $table->string("status");
            $table->string("size");
            $table->string("weight");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
