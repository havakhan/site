<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePepyakaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::create('pepyakas', function (Blueprint $table) {
             $table->increments('id');
             $table->string('user_id');
             $table->string('post_id');
             $table->string('comment_id');
             $table->boolean('up')->default(true);
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
        Schema::drop('pepyakas');
    }
}
