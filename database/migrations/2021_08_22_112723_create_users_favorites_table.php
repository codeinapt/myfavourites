<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('favorites_id')->unsigned();
            
            $table->foreign('user_id')->references('id')->on('usarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('favorites_id')->references('id')->on('favorites')
                ->onDelete('cascade')
                ->onUpd('cascade');

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
        Schema::dropIfExists('users_favorites');
    }
}
