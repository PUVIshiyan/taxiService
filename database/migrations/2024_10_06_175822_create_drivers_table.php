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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Reference to the users table
            $table->string('license_number')->unique();  // Driver's license number
            $table->string('vehicle_number')->unique();  // Vehicle registration number
            $table->string('vehicle_type');  // Type of vehicle (e.g., Sedan, SUV, etc.)
            $table->string('vehicle_model');  // Model of the vehicle
            $table->enum('status', ['available', 'on-trip', 'offline'])->default('offline'); // Driver's status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
