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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('LastName');
            $table->bigInteger('FirstName');
            $table->bigInteger('Title');
            $table->bigInteger('TitleOfCountesy');
            $table->bigInteger('BirthDate');
            $table->bigInteger('HireDate');
            $table->bigInteger('Addrees');
            $table->bigInteger('City');
            $table->bigInteger('Region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
