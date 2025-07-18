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
        Schema::table('kesepakatan_kerjasama', function (Blueprint $table) {
            $table->integer('durasi_kontrak_bulan')->nullable()->after('other_notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kesepakatan_kerjasama', function (Blueprint $table) {
            $table->dropColumn('durasi_kontrak_bulan');
        });
    }
};