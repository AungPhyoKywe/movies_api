<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('movies')) {
            Schema::create('movies', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('title');
                $table->text('summary')->nullable();
                $table->text('image_path')->nullable();
                $table->string('generes')->nullable();
                $table->string('author')->nullable();
                $table->string('tags')->nullable();
                $table->integer('imdb_rate')->nullable();
                $table->string('pdf_file')->nullable();
                $table->softDeletes();
                $table->timestamps();
            });
        }
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
};
