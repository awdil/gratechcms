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
        if (!Schema::hasTable('messages')) {
            Schema::create('messages', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('admin_id'); // Match users.id type
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
                $table->unsignedInteger('ticket_id'); // Match users.id type
                $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
                $table->string('message');
                $table->string('attachment')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
