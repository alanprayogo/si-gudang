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
        Schema::create('heavy_rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('he_id');
            $table->unsignedBigInteger('customer_id');
            $table->integer('he_amount');
            $table->date('rent_start');
            $table->date('rent_end');
            $table->integer('rent_duration');
            $table->integer('rent_cost');
            $table->enum('status', ['Completed', 'Pending', 'Rented']);
            $table->timestamps();

            $table->foreign('he_id')->references('id')->on('heavy_equipment')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heavy_rents');
    }
};
