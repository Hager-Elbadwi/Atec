<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('informations','information_translations')){

        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('status')
            ->default('0')
            ->comment('0 => inactive, 1 => inactive');
            $table->timestamps();
        });

        Schema::create('information_translations', function (Blueprint $table) {
            $table->bigIncrements('trans_id');
            $table->bigInteger('information_id')->unsigned();;
            $table->string('locale', 2);
            $table->string('name');
            $table->string('text');
            $table->timestamps();

            $table->foreign('information_id')->references('id')->on('informations')->onDelete('cascade');

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
        Schema::dropIfExists('informations');
        Schema::dropIfExists('information_translations');

    }
}
