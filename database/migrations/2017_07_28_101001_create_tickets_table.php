<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('desctiption');
            $table->string('sort_order');

            $table->string('priority');
            $table->string('status');
            $table->integer('points');

            //$table->foreign('column_id')->references('id')->on('columns');
            //$table->foreign('creator_id')->references('id')->on('users');
            //$table->foreign('asignee_id')->references('id')->on('users')->nullable();

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
        Schema::dropIfExists('tickets');
    }
}
