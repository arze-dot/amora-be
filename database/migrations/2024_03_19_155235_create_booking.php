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
        Schema::create('marketing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('url_transfer_note');
            $table->foreignId('marketing_id')->constrained('marketing')->onDelete('cascade');
            $table->foreignId('unit_id')->constrained('unit')->onDelete('cascade');
            $table->string('url_kk');
            $table->string('url_wedding_certificate');
            $table->string('url_ktp');
            $table->string('url_npwp');
            $table->string('url_house_ownership');
            $table->string('url_government_support');
            $table->string('url_tax_report');
            $table->string('url_developer_order');
            $table->string('url_customer_statement');
            $table->string('url_sp3k');
            $table->string('sp3k_status');
            $table->string('sp3k_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing');
        Schema::dropIfExists('booking');
    }
};
