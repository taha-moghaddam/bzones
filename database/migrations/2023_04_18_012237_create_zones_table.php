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
        Schema::create(config('bcore.extensions.bzones.config.db-prefix', 'bzones_') . 'zones', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);

            $table->nestedSet();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('bcore.extensions.bzones.config.db-prefix', 'bzones_') . 'zones');
    }
};
