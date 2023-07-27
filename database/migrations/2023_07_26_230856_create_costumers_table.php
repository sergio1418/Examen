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
        //esta es la estructura de la base de datos, los campos con el cual se contara en la tabla
        Schema::create('costumers', function (Blueprint $table) {
     $table->id();
     $table->string('name');
     $table->string('email');
     $table->string('phone');
     $table->string('address')->nullable();
     $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumers');
    }
};
