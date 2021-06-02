<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('id', true)->comment('autoincrement, primary key');
            $table->tinyInteger('status')->default(1)->comment('Valori posibile: 1 = vizibil (default), 2 = ascuns');
            $table->text('name');
            $table->decimal('rating', 10)->comment('De la 1 la 10');
            $table->text('description');
            $table->char('image', 2)->comment('Va retine URL-ul imaginii');
            $table->dateTime('delete_at')->comment('pentru softdelete');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
