<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('paragraphs','paragraph_translations')){

        Schema::create('paragraphs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_id')->unsigned();
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

        });

        Schema::create('paragraph_translations', function (Blueprint $table) {
            $table->bigIncrements('trans_id');
            $table->bigInteger('paragraph_id')->unsigned();
            $table->string('locale', 2);
            $table->string('text');
            $table->string('style_text');
            $table->timestamps();
            
            $table->foreign('paragraph_id')->references('id')->on('paragraphs')->onDelete('cascade');

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
        Schema::dropIfExists('paragraphs');
    }
}
