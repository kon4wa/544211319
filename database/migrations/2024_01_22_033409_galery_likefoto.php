<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        Schema::create('galery_likefoto', function (Blueprint $table) {
            $table->bigIncrements('LikeID');
            $table->integer('FotoID');
            $table->integer('UserID');
            $table->date('TanggalLike');
            $table->timestamps();

            // $table->foreign('FotoID')->references('FotoID')->on('galery_foto');
            // $table->foreign('UserID')->references('UserID')->on('galery_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_likefoto');
    }
};
