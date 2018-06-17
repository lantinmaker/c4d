<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mmid' , 16)->unique()->index();
            $table->string('title' , 256)->index();
            $table->text('content');
            $table->decimal('price',10,2);
            $table->integer('download');
            $table->integer('fav');
            $table->integer('view');
            $table->integer('polygons');
            $table->integer('vertices');
            $table->enum('textures' , ['y' , 'n'])->default("y");
            $table->enum('materials' , ['y' , 'n'])->default("y");
            $table->enum('rigged' , ['y' , 'n'])->default("n");
            $table->enum('animated' , ['y' , 'n'])->default("n");
            $table->enum('printable_ready_3d' , ['y' , 'n'])->default("n");
            $table->enum('game_ready' , ['y' , 'n'])->default("n");
            $table->enum('uv_mapped' , ['y' , 'n'])->default("y");
            $table->string('unwrapped_uvs' , '256')->nullable();
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
        Schema::drop('models');
    }
}
