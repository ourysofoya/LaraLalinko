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
        Schema::create('_sellers', function (Blueprint $table) {
            $table->id();
            /*
            $table->string ('seller_ID')->primary();
            $table->foreign ('product_ID')->references ('product_ID')->on ('_products');
            $table->string ('name');
            $table->int ('contact_add');
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
        Schema::dropIfExists('_sellers');
    }
};
