<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutWebmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_webmasters', function (Blueprint $table) {
            $table->id();
            $table->longText('header_title');
            $table->longText('header_subtitle')->nullable();
            $table->string('header_image');
            $table->longText('header_tagline');
            $table->longText('main_satu_title');
            $table->longText('main_satu_subtitle');
            $table->string('main_satu_image');
            $table->longText('program')->nullable();
            $table->longText('main_dua_title');
            $table->longText('main_dua_subtitle');
            $table->string('main_dua_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_webmasters');
    }
}
