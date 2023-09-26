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
        Schema::table('level_user', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_level_user_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('level_id', 'fk_level_user_to_level')->references('id')->on('level')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('level_user', function (Blueprint $table) {
            $table->dropForeign('fk_level_user_to_users');
            $table->dropForeign('fk_level_user_to_level');

        });
    }
};
