<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetweetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retweet', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
 
            $table->foreignId('tweet_id')
                 ->constrained()
                 ->onDelete('cascade');
 
             $table->foreignId('user_id')
                 ->constrained()
                 ->onDelete('cascade');
 
             $table->unique(['user_id', 'tweet_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retweet');
    }
}
