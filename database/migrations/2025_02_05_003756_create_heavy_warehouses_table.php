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
        Schema::create('heavy_warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_code')->unique();
            $table->string('warehouse_name')->unique();
            $table->text('warehouse_address');
            $table->string('warehouse_phone')->unique();
            $table->integer('warehouse_capacity')->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heavy_warehouses');
    }
};
