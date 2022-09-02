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
        Schema::create('_deliveries', function (Blueprint $table) {
            $table->string ('delivery_ID')->primary();
            $table->foreign('order_ID')->references('order_ID')->on('_shopping_order');
            $table->foreign('customer_ID')->references('customer_ID')->on('_customers');
            $table->foreign('product_ID')->references('product_ID')->on('_products');
            $table->date ('date');
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
        Schema::dropIfExists('_deliveries');
    }
};
