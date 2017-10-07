<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDingdongsTable extends Migration
{
    public function up()
    {
        Schema::create('dingdongs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_user_id')->default(0);
            $table->string('dingdong_user_id')->default('')->index()->unique();
            $table->string('name', 30)->default('');
            $table->string('interface')->default('KNX');
            $table->string('address')->default('0.0.0.0');
            $table->integer('port')->default(4196);
            $table->integer('baud')->default(9600);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dingdongs');
    }
}
