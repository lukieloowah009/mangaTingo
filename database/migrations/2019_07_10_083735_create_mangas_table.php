<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->integer('year');
            $table->string('status');
            $table->text('description');
            $table->char('manga_type_id', 36);
            $table->char('author_id', 36);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('mangas', function (Blueprint $table) {
            $table->foreign('manga_type_id')->references('id')->on('manga_types');
            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
