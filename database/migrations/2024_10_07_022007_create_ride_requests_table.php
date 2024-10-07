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
        Schema::create('ride_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passenger_id')->constrained('users')->onDelete('cascade'); // Customer who requested the ride
            $table->foreignId('ride_id')->constrained('rides')->onDelete('cascade'); // Associated ride
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null'); // Driver who responded to the request
            $table->enum('status', ['pending', 'accepted', 'rejected', 'expired'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_requests');
    }
};
