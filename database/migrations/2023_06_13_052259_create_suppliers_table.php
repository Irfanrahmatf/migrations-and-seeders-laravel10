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

        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CompanyName');
            $table->bigInteger('ContactName');
            $table->bigInteger('ContactTitle');
            $table->bigInteger('Address');
            $table->bigInteger('City');
            $table->bigInteger('Region');
            $table->bigInteger('PostalCode');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
