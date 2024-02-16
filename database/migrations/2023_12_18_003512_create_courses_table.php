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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->float('rating');
            $table->float('price');
            $table->string('payment_status')->default('unpaid');
            $table->decimal('revenue', 8, 2)->default(0);
            $table->string('status')->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    

     public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('payment_status');
            $table->dropColumn('revenue');
            $table->dropColumn('status');
        });

    }

};