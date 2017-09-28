<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoomsAndAdminDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('admin_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->string('description', 100)->default('');
            $table->timestamps();
        });

        Schema::create('admin_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->string('description', 100)->default('');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('admin_roles');
        Schema::dropIfExists('admin_permissions');
    }
}
