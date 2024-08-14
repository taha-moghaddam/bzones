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
        Schema::table(config('bcore.database.users_table', 'admin_users'), function (Blueprint $table) {
            $table->foreignId('zone_id')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(config('bcore.database.users_table', 'admin_users'), function (Blueprint $table) {
            $table->dropColumn('zone_id');
        });
    }
};
