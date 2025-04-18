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
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('sp_code')->unique();
            $table->unsignedBigInteger('warehouse_id');
            $table->string('sp_name')->unique();
            $table->string('sp_merk')->unique();
            $table->string('sp_category');
            $table->integer('sp_price');
            $table->integer('sp_stock');
            $table->string('rack_location')->unique();
            $table->integer('minimum_stock');
            $table->enum('sp_status', ['In Stock', 'Need Restock', 'Out of Stock']);
            $table->timestamps();

            $table->foreign('warehouse_id')->references('id')->on('spare_part_warehouses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_parts');
    }
};
