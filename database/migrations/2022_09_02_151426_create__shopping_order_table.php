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
        Schema::create('_shopping_order', function (Blueprint $table) {
            $table->string ('order_ID')->primary();
            $table->foreign ('customer_ID')->references('customer_ID')->on ('_customers');
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
        Schema::dropIfExists('_shopping_order');
    }
};
