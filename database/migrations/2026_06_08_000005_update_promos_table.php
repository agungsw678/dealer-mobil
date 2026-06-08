<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('promos', function (Blueprint $table) {
            if (!Schema::hasColumn('promos', 'title')) {
                $table->string('title')->nullable()->after('nama_mobil');
            }
            if (!Schema::hasColumn('promos', 'image')) {
                $table->string('image')->nullable()->after('deskripsi');
            }
            if (!Schema::hasColumn('promos', 'starts_at')) {
                $table->date('starts_at')->nullable()->after('image');
            }
            if (!Schema::hasColumn('promos', 'ends_at')) {
                $table->date('ends_at')->nullable()->after('starts_at');
            }
            if (!Schema::hasColumn('promos', 'status')) {
                $table->boolean('status')->default(true)->after('ends_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('promos', function (Blueprint $table) {
            if (Schema::hasColumn('promos', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('promos', 'ends_at')) {
                $table->dropColumn('ends_at');
            }
            if (Schema::hasColumn('promos', 'starts_at')) {
                $table->dropColumn('starts_at');
            }
            if (Schema::hasColumn('promos', 'image')) {
                $table->dropColumn('image');
            }
            if (Schema::hasColumn('promos', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};