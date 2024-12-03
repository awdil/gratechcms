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
          if (!Schema::hasTable('subscriptions')) {
                Schema::create('subscriptions', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedInteger('user_id'); // Match users.id type
                    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                    $table->unsignedBigInteger('plan_id'); // Adjust to match plans.id type
                   // $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
                    $table->unsignedBigInteger('transaction_id'); // Adjust to match transactions.id type
                   // $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
                    $table->date('start_date');
                    $table->date('expiry_date');
                    $table->string('status')->default('active');
                    $table->timestamps();
                });

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
