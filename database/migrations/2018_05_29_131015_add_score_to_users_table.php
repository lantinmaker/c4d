<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScoreToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar' , 1024);
            $table->integer('score')->unsigned()->default(0);
            $table->string('phone' , '11')->nullable();
            $table->enum('status' , ["1" , "2" , "3"])->default("1");
            $table->enum('is_vip' , ['y' , 'n'])->default("n");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('score');
            $table->dropColumn('phone');
            $table->dropColumn('status');
            $table->dropColumn('is_vip');
        });
    }
}
