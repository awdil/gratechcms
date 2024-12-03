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
        if (!Schema::hasTable('component_contents')) {
            Schema::create('component_contents', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('component_id')->nullable();
                 $table->unsignedInteger('category_id')->nullable();
                $table->longText('content')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_contents');
    }
};
