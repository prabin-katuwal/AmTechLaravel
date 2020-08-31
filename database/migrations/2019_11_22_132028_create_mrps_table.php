<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productname');
            $table->string('composition');
            $table->integer('mrpcategory_id');
            $table->string('packsize');
            $table->string('mrp');
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
        Schema::dropIfExists('mrps');
    }
}
