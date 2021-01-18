<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoomclasses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id', 11)->nullable();
            $table->string('title', 191)->nullable();
            $table->string('zoom_email', 191)->nullable();
            $table->string('meeting_id', 191)->nullable();
            $table->string('meeting_password', 191)->nullable();
            $table->text('jwt_key', 191)->nullable();
            $table->text('jwt_secret', 191)->nullable();
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
        Schema::dropIfExists('zoomclasses');
    }
}

// 'title', 'user_id', 'zoom_email', 'meetingId', 'meetingPassword', 'jwtKey', 'jwtSecret'
