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
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->integer('jabatan_id');
            $table->string('nama');
            $table->string('email');
            $table->string('kontak');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', [1,2]);
            $table->string('alamat');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
};
