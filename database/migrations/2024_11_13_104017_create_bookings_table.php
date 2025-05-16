<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('requestid');
            $table->unsignedBigInteger('productid')->nullable();
             $table->index('productid');
             $table->foreign('productid')->references('productid')->on('products')->onDelete('cascade');
             $table->unsignedBigInteger('customerid')->nullable();
             $table->index('customerid');
             $table->foreign('customerid')->references('customerid')->on('customers')->onDelete('cascade');
             $table->string('quantity');
             $table->string('totalamount');
             $table->string('requestdate');
             $table->string('requireddate');
             $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
