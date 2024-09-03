<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blotter_tbls', function (Blueprint $table) {
            if (Schema::hasColumn('blotter_tbls', 'blotter_complainants')) {
                $table->dropColumn('blotter_complainants');
            }
        });
    }
    
    public function down()
    {
        Schema::table('blotter_tbls', function (Blueprint $table) {
            if (!Schema::hasColumn('blotter_tbls', 'blotter_complainants')) {
                $table->text('blotter_complainants')->nullable();
            }
        });
    }
};
