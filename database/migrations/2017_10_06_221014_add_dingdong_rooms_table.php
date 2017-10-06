<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDingdongRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('dingdong_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dingdong_id')->default(0);
            $table->string('name', 30)->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dingdong_rooms');
    }
}
