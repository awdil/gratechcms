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
        Schema::create('deposit_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_gateway_id')->comment('Payment gateway id')->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('name');
            $table->enum('type', ['auto', 'manual'])->comment('auto = automatic, manual = manual');
            $table->string('method_code');
            $table->string('currency');
            $table->string('currency_symbol');
            $table->double('min_deposit');
            $table->double('max_deposit');
            $table->tinyInteger('conversion_rate_live')->nullable();
            $table->double('conversion_rate')->nullable();
            $table->longText('receive_payment_details')->nullable();
            $table->enum('rate_type', ['fixed', 'live'])->comment('fixed = fixed rate, live = live rate');
            $table->double('rate')->nullable();
            $table->enum('charge_type', ['fixed', 'percent'])->comment('fixed = fixed charge, percent = percent charge');
            $table->double('charge');
            $table->longText('fields')->nullable();
            $table->longText('notes')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposit_methods');
    }
};
