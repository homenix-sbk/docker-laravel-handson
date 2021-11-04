<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('no');
            $table->char('empId', 4);
            $table->string('name', 7);
            $table->integer('age');
            $table->date('joinDay');
            $table->string('genderId', 3);
            $table->string('positionId', 3);
            $table->string('depertmentId', 3);
            $table->integer('retire');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
