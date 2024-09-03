<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blotter_tbls', function (Blueprint $table) {
            $table->id('blotter_id');
            $table->unsignedBigInteger('res_id')->nullable();
            $table->foreign('res_id')->references('res_id')->on('resident_tbls')->onDelete('cascade')->nullable();
            $table->text('blotter_transactionCode')->nullable();
            $table->text('blotter_respondents')->nullable();
            $table->text('blotter_brgyCaseNum')->nullable();
            $table->text('blotter_for')->nullable();
            $table->text('blotter_complaint')->nullable();
            $table->text('blotter_resolution')->nullable();
            $table->date('blotter_complaintMade')->nullable();
            $table->date('blotter_filedDate')->nullable();
            $table->timestamps();
        });

        // Remove this part, since we're not creating the column, we don't need to drop it
        // Schema::table('blotter_tbls', function (Blueprint $table) {
        //     $table->dropColumn('blotter_complainants');
        // });
    }

    public function down(): void
    {
        Schema::dropIfExists('blotter_tbls');
    }
};
