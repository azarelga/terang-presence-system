<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->timestamp('clock_in')->nullable();
            $table->timestamp('clock_out')->nullable();
            $table->string('status')->default('pending');
            $table->text('dispensation_reason')->nullable();
            $table->string('dispensation_status')->nullable(); // 'pending', 'approved', 'rejected'
            $table->timestamps();

            $table->unique(['user_id', 'date']); // Ensure one record per user per day
        });
    }

    public function down()
    {
        Schema::dropIfExists('presences');
    }
};
