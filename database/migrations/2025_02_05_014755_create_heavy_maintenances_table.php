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
        Schema::create('heavy_maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('he_id');
            $table->unsignedBigInteger('sp_id');
            $table->integer('sp_need');
            $table->integer('maintenance_cost');
            $table->date('maintenance_start');
            $table->date('maintenance_end');
            $table->text('description');
            $table->enum('status', ['Completed', 'Pending', ' Repair']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('he_id')->references('id')->on('heavy_equipment')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sp_id')->references('id')->on('spare_parts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heavy_maintenances');
    }
};
