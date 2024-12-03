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
        // CREATE TABLE `plugins` (
        // `id` bigint UNSIGNED NOT NULL,
        // `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `code` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        // `fields_blade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
        // `credentials` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `status` tinyint(1) NOT NULL,
        // `created_at` timestamp NULL DEFAULT NULL,
        // `updated_at` timestamp NULL DEFAULT NULL
        // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
         if (!Schema::hasTable('plugins')) {
            Schema::create('plugins', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type');
                $table->string('name');
                $table->string('code')->nullable();
                $table->text('fields_blade')->nullable();
                $table->text('credentials');
                $table->string('logo');
                $table->string('description');
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
