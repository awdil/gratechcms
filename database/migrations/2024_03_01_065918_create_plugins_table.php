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
         if (!Schema::hasTable('plugins')) {
            Schema::create('plugins', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('logo');
                $table->string('description');
                $table->text('credentials');
                $table->boolean('status');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_lugins');
    }
};