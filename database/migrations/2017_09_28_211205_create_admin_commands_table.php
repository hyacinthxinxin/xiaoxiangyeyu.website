<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminCommandsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_commands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->unique()->default('');
            $table->integer('type')->default(0);
            $table->tinyInteger('status')->default(0); // 0未知 1启动 -1屏蔽;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_commands');
    }

}
