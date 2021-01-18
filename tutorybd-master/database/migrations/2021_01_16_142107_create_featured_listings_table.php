<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('user_id');
            $table->decimal('amount')->nullable();
            $table->string('paymentMethod')->nullable();
            $table->string('list_for')->nullable();
            $table->enum('paymentStatus', array('1','0'))->nullable();
            $table->integer('number')->nullable();
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
        Schema::dropIfExists('featured_listings');
    }
}
