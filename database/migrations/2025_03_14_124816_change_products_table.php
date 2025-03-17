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
        Schema::table('products', function (Blueprint $table) {
            // thay đổi kiểu dữ liệu của price
            $table->unsignedInteger('price')->change();
            // thêm cột
            $table->text('description')->after('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // trả về dữ liệu ban đầu
            $table->integer('price')->change();
            // xóa cột
            $table->dropColumn('description');
        });
    }
};
