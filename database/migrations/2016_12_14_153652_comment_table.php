<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('comment')->nullable();
            $table->integer('news_id')->unsigned();
            $table->string('news_title')->nullable();
            $table->string('news_author_email')->nullable();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->tinyInteger('comment_status')->default(0);
            $table->timestamps();
        });

      /*  Schema::table('comment',function ($table){

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::dropForeign(['news_id']);*/
        Schema::drop('comment');

    }
}
