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
        Schema::create('html_page_details', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_path');
            $table->text('contents');
            $table->string('public_path_la');
            $table->string('public_path_mk');
            $table->string('side_menu_mk_link_path');
            $table->integer('order');
            $table->boolean('enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('html_page_details');
    }
};
