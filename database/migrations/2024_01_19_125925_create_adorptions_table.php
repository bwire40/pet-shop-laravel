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
        Schema::create('adorptions', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('address');
            $table->string('number');

            // pet
            $table->string('petname'); //
            $table->string('category'); //
            $table->string('breed'); //
            $table->text('description'); //
            $table->string('age'); //
            $table->string('weight');
            $table->string('color'); //
            $table->string('gender'); //
            $table->unsignedDouble('adorption_fee');

            // familiy
            $table->string('experience'); //
            $table->string('pets'); //
            $table->string('vetenary'); //

            // housing
            $table->string('house_type');
            $table->string('house_ownership'); //
            $table->string('house_agreement'); //
            $table->string('allergies');
            $table->string('training_type'); //

            // commitement
            $table->string('care'); //
            $table->string('followup');
            $table->string('terms'); //

            $table->string('adorption_status');


            // foreign keys
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pets_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adorptions');
    }
};
