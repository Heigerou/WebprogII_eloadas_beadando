<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('munkalaps', function (Blueprint $table) {
            $table->id();
            $table->date('bedatum');
            $table->date('javdatum');
            $table->unsignedBigInteger('helyaz');
            $table->unsignedBigInteger('szereloaz');
            $table->integer('munkaora');
            $table->integer('anyagar');
            $table->timestamps();

            $table->foreign('helyaz')->references('id')->on('helys')->onDelete('cascade');
            $table->foreign('szereloaz')->references('id')->on('szerelos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('munkalaps');
    }
};
