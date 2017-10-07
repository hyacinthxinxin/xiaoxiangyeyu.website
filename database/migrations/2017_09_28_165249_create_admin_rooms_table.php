<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoomsTable extends Migration
{

    public function up()
    {
        Schema::create('admin_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique()->default('');
            $table->tinyInteger('status')->default(0); // 0未知 1启动 -1屏蔽;
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('admin_rooms');
    }

}
