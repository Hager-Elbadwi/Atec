<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pages','page_images','page_translations')){

        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('page_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_id')->unsigned();
            $table->string('photo');

            $table->timestamps();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

        });

        Schema::create('page_translations', function (Blueprint $table) {
            $table->bigIncrements('trans_id');
            $table->bigInteger ('page_id')->unsigned();
            $table->string('locale', 2);
            $table->string('title');
            $table->string('keywords');
            $table->string('meta_disc');



            $table->timestamps();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

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
        Schema::dropIfExists('pages');
        Schema::dropIfExists('page_images');
        Schema::dropIfExists('page_translations');

    }
}
