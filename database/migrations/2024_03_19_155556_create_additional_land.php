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
        Schema::create('additional_land_payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->constrained('unit')->onDelete('cascade');
            $table->foreignId('booking_id')->constrained('booking')->onDelete('cascade');
            $table->float('amount');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('additional_land_installment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained('additional_land_payment')->onDelete('cascade');
            $table->float('amount');
            $table->string('url_transfer_receipt');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_land_payment');
        Schema::dropIfExists('additional_land_installment');
    }
};
