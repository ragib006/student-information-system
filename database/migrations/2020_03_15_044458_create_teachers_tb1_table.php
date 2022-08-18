<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTb1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_tb1', function (Blueprint $table) {
              $table->increments('teachers_id');
              $table->string('teachers_name');
              $table->string('teachers_phone');
              $table->string('teachers_address');
              $table->string('teachers_department');
              $table->string('teachers_image');

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
        Schema::dropIfExists('teachers_tb1');
    }
}
