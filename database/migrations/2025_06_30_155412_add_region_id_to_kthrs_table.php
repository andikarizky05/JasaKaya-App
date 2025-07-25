<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('kthrs', function (Blueprint $table) {
            $table->foreignId('region_id')
                ->after('registered_by_user_id')
                ->constrained('regions', 'region_id')
                ->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::table('kthrs', function (Blueprint $table) {
            $table->dropForeign(['region_id']);
            $table->dropColumn('region_id');
        });
    }
};

