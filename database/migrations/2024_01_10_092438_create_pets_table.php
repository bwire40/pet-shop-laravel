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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //
            $table->string('category'); //
            $table->string('breed'); //
            $table->text('description'); //
            $table->string('age'); //
            $table->string('weight');
            $table->string('color'); //
            $table->string('gender'); //
            $table->text('image')->nullable(); //
            $table->string('adoption_status'); //
            $table->unsignedDouble('adorption_fee');
            $table->foreignId('pet_category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('breed_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
