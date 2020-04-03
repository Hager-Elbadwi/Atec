<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orders','orders_history','orders_history_specifications')){

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->string('name');
            $table->tinyInteger('status')
            ->default('0')
            ->comment('0 => inactive, 1 => inactive'); 
            $table->string('price');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

        });

        Schema::create('orders_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('consignee_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
            $table->string('refraction');
            $table->bigInteger('lens_id')->unsigned();
            $table->string('lens_type');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('consignee_id')->references('id')->on('consigness')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('lens_id')->references('id')->on('lenses')->onDelete('cascade');

        });

        
        Schema::create('orders_history_specifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->string('diameter');
            $table->string('optimized_diameter')->nullable()->default('1');
            $table->string('sphere');
            $table->string('axis');
            $table->string('cylinder');
            $table->string('additional')->default('1');
            $table->string('prism_1');
            $table->string('base_1');
            $table->string('prism_2');
            $table->string('base_2');
            $table->string('res_prism');
            $table->string('res_base');


            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orders_history');
        Schema::dropIfExists('orders_history_specifications');

    }
}
