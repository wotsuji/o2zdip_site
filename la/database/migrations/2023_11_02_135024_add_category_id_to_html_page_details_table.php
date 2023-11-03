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
        Schema::table('html_page_details', function (Blueprint $table) {
            //
            $table->integer('category_id')->after('id');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('html_page_details', function (Blueprint $table) {
            //
            $table->dropColumn('category_id');
        });
    }
};
