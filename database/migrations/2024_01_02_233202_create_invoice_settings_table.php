<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('invoice_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('invoice_status')->default(false);
            $table->decimal('invoice_amount', 10, 2)->nullable();
            $table->string('invoice_number_prefix')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_settings');
    }
};
