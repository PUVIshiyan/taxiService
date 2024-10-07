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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passenger_id')->constrained('users')->onDelete('cascade');  // The customer who booked the ride
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null');  // The driver assigned to the ride
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->decimal('fare', 8, 2)->nullable();  // Ride fare
            $table->enum('status', ['pending', 'accepted', 'on-trip', 'completed', 'canceled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
