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
        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->unsignedInteger('local_currency_cost'); //It refers to how much it costs us in that country.
            $table->unsignedInteger('local_currency_price'); //It refers to how much we sell it in Argentine pesos.
            $table->unsignedInteger('credits_price');//It refers to how much we sell it for in the marketplace.
            $table->unsignedBigInteger('benefit_id');
            $table->foreign('benefit_id')->references('id')->on('benefits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variations');
    }
};
