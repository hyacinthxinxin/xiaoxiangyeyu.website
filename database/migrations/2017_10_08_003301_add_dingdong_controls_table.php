<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDingdongControlsTable extends Migration
{
    public function up()
    {
        Schema::create('dingdong_controls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dingdong_id')->default(0);
            $table->string('room_name', 30)->default('');
            $table->string('device_name')->default('');
            $table->string('command_name')->default('');
            $table->integer('command_type')->default(0);
            $table->integer('command_value')->default(0);
            $table->string('command_address')->default('0/0/0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dingdong_controls');
    }
}
