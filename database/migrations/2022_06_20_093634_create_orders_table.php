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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            // $table->foreign('country')->references('id')->on('countries')->onDelete('cascade');
            $table->string('subject');
            // $table->foreign('subject')->references('id')->on('subjects')->onDelete('cascade');
            $table->string('paper_type');
            $table->string('paper_topic');
            $table->string('academic_level');
            $table->string('number_of_pages');
            $table->string('reference_style');
            // $table->foreign('reference_style')->references('id')->on('refrence_styles')->onDelete('cascade');
            $table->integer('style');
            $table->string('deadline');
            $table->mediumText('detail')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->boolean('spacing')->default(false);
            $table->integer('cost_per_page');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
