<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Only try to drop the column if it exists
        if (Schema::hasColumn('blotter_tbls', 'blotter_complainants')) {
            Schema::table('blotter_tbls', function (Blueprint $table) {
                $table->dropColumn('blotter_complainants');
            });
        }
    }

    public function down(): void
    {
        // Only add the column back if it doesn't exist
        if (!Schema::hasColumn('blotter_tbls', 'blotter_complainants')) {
            Schema::table('blotter_tbls', function (Blueprint $table) {
                $table->text('blotter_complainants')->nullable();
            });
        }
    }
};
