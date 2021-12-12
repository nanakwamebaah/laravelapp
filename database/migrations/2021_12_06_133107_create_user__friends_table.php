<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__friends', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sourceId');
            $table->unsignedBigInteger('targetId');
            $table->foreign('sourceId')->references('id')->on('fusers')->onDelete('cascade');
            $table->foreign('targetId')->references('id')->on('fusers')->onDelete('cascade');
            $table->string('type')->nullable();
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
        $table->dropForeign('user__friends_sourceId_foreign');
        $table->dropForeign('user__friends_targetId_foreign');
        Schema::dropIfExists('user__friends');
    }
}
