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
        Schema::table('level_akses', function (Blueprint $table) {
            $table->foreign('akses_id', 'fk_level_akses_to_akses')->references('id')->on('akses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('level_id', 'fk_level_akses_to_level')->references('id')->on('level')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('level_akses', function (Blueprint $table) {
            $table->dropForeign('fk_level_akses_to_akses');
            $table->dropForeign('fk_level_akses_to_level');
        });
    }
};
