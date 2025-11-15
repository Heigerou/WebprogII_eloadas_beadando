<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('helys', function (Blueprint $table) {
            $table->id();
            $table->string('telepules');
            $table->string('utca');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('helys');
    }
};
