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
        Schema::create('nonvegpizza', function (Blueprint $table) {
            $table->id();
            $table->string('nonvegpizzaitems');
            $table->string('nonvegpizzaprice');
            $table->string('nonvegimage');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonvegpizza');
    }
};
