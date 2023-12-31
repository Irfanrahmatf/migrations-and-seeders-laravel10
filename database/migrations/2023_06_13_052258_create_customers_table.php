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
        Schema::disableForeignKeyConstraints();

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CustomerID')->index();
            $table->foreign('CustomerID')->references('CustomerID')->on('orders');
            $table->string('CompanyName');
            $table->string('ContactName');
            $table->string('ContactTitle');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
            $table->string('PostalCode');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
