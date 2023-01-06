<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->string('nama');
            $table->string('alamatAsal');
            $table->bigInteger('noTelp');
            $table->unsignedBigInteger('nomorKamar');
            $table->foreign('nomorKamar')->references('id')->on('rooms');
            $table->string('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penghuni');
    }

    // public function tearDown()
    // {
    //     $maxId =DB::table('users')->max('id');
    //     DB::statement('ALTER TABLE users AUTO_INCREMENT=' . intval($maxId + 1) . ';');
    // }

};
