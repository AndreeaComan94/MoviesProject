<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovieArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie_artist', function (Blueprint $table) {
            $table->foreign('movie_id', 'movie_artist_ibfk_1')->references('id')->on('movies')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('artist_id', 'movie_artist_ibfk_2')->references('id')->on('artists')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_artist', function (Blueprint $table) {
            $table->dropForeign('movie_artist_ibfk_1');
            $table->dropForeign('movie_artist_ibfk_2');
        });
    }
}
