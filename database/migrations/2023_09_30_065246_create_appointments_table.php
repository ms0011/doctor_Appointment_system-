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
            $table->integer('doctor_id');
        $table->string('patient_name');
        $table->datetime('appointment_date');
        $table->text('reason');


        // $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
