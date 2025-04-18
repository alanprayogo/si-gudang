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
        Schema::create('spare_part_warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_code')->unique();
            $table->string('warehouse_name')->unique();
            $table->text('warehouse_address');
            $table->integer('rack_count');
            $table->enum('storage_type', ['AC', 'NON_AC', 'COLD_STORAGE', 'HEATED', 'OUTDOOR', 'HAZMAT']);
            $table->integer('shelf_per_rack')->nullable();
            $table->decimal('temperature', 4, 1)->nullable();
            $table->integer('humidity')->nullable();          
            $table->decimal('total_area', 10, 2);   
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_part_warehouses');
    }
};
