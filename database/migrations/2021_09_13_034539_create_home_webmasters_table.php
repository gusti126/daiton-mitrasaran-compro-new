<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeWebmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_webmasters', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->string('header_subtitle');
            $table->longText('alamat');
            $table->longText('kontak');
            $table->longText('email');
            $table->longText('jamkerja');
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
        Schema::dropIfExists('home_webmasters');
    }
}
