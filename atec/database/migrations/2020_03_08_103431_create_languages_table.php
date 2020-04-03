<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('languages')){

        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale', 2);
            $table->string('name');
            $table->string('dir');
            $table->tinyInteger('status')
            ->default('0')
            ->comment('0 => inactive, 1 => inactive');
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
        Schema::dropIfExists('languages');
    }
}
