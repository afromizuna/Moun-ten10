<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->string('spec',20);
          $table->string('spec_detail1',20);
          $table->string('spec_detail2',20);
          $table->string('spec_detail3',20);

          // 外部キーを設定する
          $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specs');
    }
}
