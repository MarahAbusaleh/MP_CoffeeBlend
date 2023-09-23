<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->string('discount_code');
            $table->float('discount_per');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('discount');
    }
};
