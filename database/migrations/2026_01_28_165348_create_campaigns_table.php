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
   Schema::create('campaigns', function (Blueprint $table) {
    $table->id();

    $table->string('name');                 // Campaign name
    $table->string('target_email');         // Victim email
    $table->string('phishing_url');         // Fake login URL
    $table->boolean('is_active')->default(true); // Campaign status

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
