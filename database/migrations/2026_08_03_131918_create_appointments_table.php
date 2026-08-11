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
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->dateTime('appointment_datetime');

        $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
        $table->foreignId('doctor_id')->constrained()->cascadeOnDelete();

        $table->enum('status', [
            'Scheduled',
            'Completed',
            'Cancelled',
            'No Show'
        ])->default('Scheduled');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
