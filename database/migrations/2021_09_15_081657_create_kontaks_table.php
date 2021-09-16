<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->longText('header_title');
            $table->longText('header_subtitle');
            $table->string('image')->nullable();
            $table->string('email');
            $table->string('wa');
            $table->string('telepon');
            $table->string('ic_email')->nullable();
            $table->string('ic_wa')->nullable();
            $table->string('ic_telepon')->nullable();
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
        Schema::dropIfExists('kontaks');
    }
}
