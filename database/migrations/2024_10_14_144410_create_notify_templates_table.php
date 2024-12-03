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

        Schema::create('notify_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icon')->nullable();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('info')->nullable();
            $table->string('type');
            $table->string('subject')->nullable();
            $table->text('push_message');
            $table->text('mail_message');
            $table->text('variables');
            $table->boolean('mail_status')->default(0);
            $table->boolean('push_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notify_templates');
    }
};
