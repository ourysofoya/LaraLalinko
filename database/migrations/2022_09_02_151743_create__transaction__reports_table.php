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
        Schema::create('_transaction__reports', function (Blueprint $table) {
            $table->id();
            /*
            $table->string ('report_ID')->primary();
            $table->foreign('customer_ID')->references('customer_ID')->on('_customers');
            $table->foreign('order_ID')->references('order_ID')->on ('_shopping_order');
            $table->foreign('product_ID')->references('product_ID')->on ('_products');
            $table->foreign('payment_ID')->references('payment_ID')->on ('_payments');
            $table->date ('date');
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
        Schema::dropIfExists('_transaction__reports');
    }
};
