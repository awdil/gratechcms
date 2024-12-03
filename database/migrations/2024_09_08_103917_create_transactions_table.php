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
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); // Match users.id type
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('txid')->nullable();
            $table->text('description')->nullable();
            $table->string('method')->nullable();
            $table->string('type'); // deposit, payment, withdrawal, subscription, etc.
            $table->decimal('amount', 15, 2);
            $table->decimal('fee', 15, 2)->nullable(); // Fee for withdrawal or payment
            $table->string('currency')->default('USD');
            $table->string('pay_amount')->nullable();
            $table->string('pay_currency')->nullable();
            $table->text('array_data')->nullable();
            $table->text('action_cause')->nullable();
            $table->enum('status', ['pending', 'completed', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
