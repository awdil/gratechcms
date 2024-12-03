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
        if (!Schema::hasTable('page_components')) {
            Schema::create('page_components', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('content_id')->nullable();
                $table->string('icon')->nullable();
                $table->string('name');
                $table->string('section');
                $table->string('category')->default('dynamic');
                $table->longText('content');
                $table->string('type')->default('static');
                $table->longText('content_fields')->nullable()->comment('this fields for component contents table');
                $table->boolean('with_modal')->default(1)->comment('this fields for content management');
                $table->string('status')->default(1);
                $table->unsignedBigInteger('sort')->default(60);
                $table->string('preview')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_components');
    }
};
