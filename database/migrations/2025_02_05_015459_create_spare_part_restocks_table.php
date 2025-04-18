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
        Schema::create('spare_part_restocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sp_id');
            $table->unsignedBigInteger('warehouse_id');
            $table->integer('amount');
            $table->integer('restock_cost');
            $table->date('restock_date');
            $table->text('description');
            $table->timestamps();

            $table->foreign('sp_id')->references('id')->on('spare_parts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('warehouse_id')->references('id')->on('spare_part_warehouses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_part_restocks');
    }
};
