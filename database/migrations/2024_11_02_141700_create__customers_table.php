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
        Schema::create('Customers', function (Blueprint $table) {
            $table->bigIncrements('customerid');
            $table->string('customername');
            $table->string('address');
            $table->string('email');
            $table->unsignedBigInteger('locationid')->nullable();
            $table->index('locationid');
            $table->foreign('locationid')->references('locationid')->on('locations')->onDelete('cascade');
            $table->string('username');
            $table->string('password');
            $table->bigInteger('contact');
            $table->date('regdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Customers');
    }
};
