<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerchResultHandlebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serch_result_handlebars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('price',20);
            $table->text('image_url');
            $table->text('click_url');
            $table->string('site_name',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serch_result_handlebars');
    }
}
