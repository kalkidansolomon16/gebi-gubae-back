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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->foreignId('zone_id')->references('id')->on('zones')->onDelete('cascade');
         
            $table->foreignId('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->string('wereda');
            $table->string('phone');
            $table->foreignId('sex_id')->references('id')->on('sexes')->onDelete('cascade');
            $table->foreignId('repent_fathers_id')->references('id')->on('repent_fathers')->onDelete('cascade');
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignId('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->string('block');
            $table->string('dorm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
