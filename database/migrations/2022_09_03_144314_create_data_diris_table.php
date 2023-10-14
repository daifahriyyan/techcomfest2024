<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diris', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('userid');
            $table->enum('status' , ['Not Verified' , 'Verified' , 'Denied'])->default('Not Verified');
            $table->string('lokasi');
            $table->string('keterangan')->default('Menunggu Untuk Direview');
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
        Schema::dropIfExists('data_diris');
    }
};
