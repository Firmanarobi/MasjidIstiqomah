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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_detail_user_to_users');
            $table->foreignId('tipe_user_id')->nullable()->index('fk_detail_user_to_tipe_user');
            $table->string('kontak')->nullable();
            $table->text('alamat')->nullable();
            $table->longText('foto')->nullable();
            $table->enum('jenis_kelamin', [1,2])->nullable();
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
        Schema::dropIfExists('detail_user');
    }
};
