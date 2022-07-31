<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plant_id')->unsigned()->nullable();
            $table->foreign('plant_id')->references('id')
                ->on('plants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('criteria_id')->unsigned()->nullable();
            $table->foreign('criteria_id')->references('id')
                ->on('criterias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('min_value')->nullable();
            $table->string('max_value')->nullable();
            $table->integer('parameter');
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
        Schema::dropIfExists('data');
    }
}
