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
        Schema::table('b_04_01_category', function (Blueprint $table) {
            $table->renameColumn('id', 'category_id'); // id → category_id に変更
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('b_04_01_category', function (Blueprint $table) {
            $table->renameColumn('category_id', 'id'); // 元に戻す処理
        });
    }
};
