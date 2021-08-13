<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //un post va a pertenecer a un curso
            $table->unsignedBigInteger('course_id')->default(0);

            $table->string('name');
            $table->text('content');
            $table->boolean('free')->default(0);
            $table->timestamps();

            //aqui se crean las relaciones de la tablas
            //1 nombre del campo en tabla local 2 nombre del campo tabla foranea
            //3 nombre de la forenea
            //$table->foreign('course_id')->references('id')->on('courses')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
