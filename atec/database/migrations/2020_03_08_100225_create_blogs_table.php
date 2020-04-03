<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('blogs',)){
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->timestamps();
        });

        Schema::create('blog_translations', function (Blueprint $table) {

            $table->bigIncrements('trans_id');
            $table->bigInteger('blog_id')->unsigned();
            $table->string('locale', 2);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
        // Schema::dropIfExists('blog_translations');

    }
}
