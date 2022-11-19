<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('_products', function (Blueprint $table) {
            $table->id();
            /*
            $table->string ('product_ID')->primary();
            $table->foreign('category_ID')->references('category_ID')->on ('_categories');
            $table->string ('product_name');
            */
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
        Schema::dropIfExists('_products');
    }
};
