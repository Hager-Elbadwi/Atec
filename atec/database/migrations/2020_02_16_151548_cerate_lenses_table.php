<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeratelensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(' lenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');

            $table->tinyInteger('status')
            ->default('1')
            ->comment('0 => inactive, 1 =>active');

            $table->tinyInteger('addition')
            ->default('0')
            ->comment('0 => inactive, 1 =>active');
            
            $table->tinyInteger('prism')
            ->default('0')
            ->comment('0 => inactive, 1 =>active');

            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('filter_lenses', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('lens_id')->unsigned();
            $table->bigInteger('filter_id')->unsigned();

            $table->foreign('lens_id')->references('id')->on('lenses')->onDelete('cascade');
            $table->foreign('filter_id')->references('id')->on('filter')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filter_lenses');
        Schema::dropIfExists('lenses');
    }
}
