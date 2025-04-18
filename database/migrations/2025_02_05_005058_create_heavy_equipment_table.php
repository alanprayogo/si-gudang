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
        Schema::create('heavy_equipment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_id');
            $table->string('he_name')->unique();
            $table->string('he_merk')->unique();
            $table->string('he_model')->unique();
            $table->string('he_year')->unique();
            $table->string('he_seri')->unique();
            $table->integer('he_price');
            $table->integer('he_stock');
            $table->enum('he_condition', ['Good', 'Damaged', 'Repair']);
            $table->enum('he_status', ['Available', 'Rented', 'Maintenance']);
            $table->timestamps();

            $table->foreign('warehouse_id')->references('id')->on('heavy_warehouses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heavy_equipment');
    }
};
