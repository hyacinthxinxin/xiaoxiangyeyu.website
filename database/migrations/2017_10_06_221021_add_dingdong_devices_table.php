<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDingdongDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('dingdong_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dingdong_room_id')->default(0);
            $table->string('name', 30)->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dingdong_devices');
    }
}
