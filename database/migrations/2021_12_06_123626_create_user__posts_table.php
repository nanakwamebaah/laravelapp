<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fuserId');
            $table->foreign('fuserId')->references('id')->on('fusers')->onDelete('cascade');
            $table->longText('message')->nullable();
            $table->string('image')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer('dislike_count')->nullable();
            $table->integer('share_count')->nullable();
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
        $table->dropForeign('user__posts_fuserId_foreign');
        Schema::dropIfExists('user__posts');
    }
}
