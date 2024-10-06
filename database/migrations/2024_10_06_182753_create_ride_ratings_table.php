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
        Schema::create('ride_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ride_id')->constrained('rides')->onDelete('cascade'); // Link to the ride
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who left the rating
            $table->tinyInteger('rating')->unsigned(); // Rating score (1-5)
            $table->text('feedback')->nullable(); // Optional feedback
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_ratings');
    }
};
