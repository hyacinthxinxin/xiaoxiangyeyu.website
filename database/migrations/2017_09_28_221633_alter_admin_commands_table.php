<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdminCommandsTable extends Migration
{
    public function up()
    {
        Schema::table('admin_commands', function (Blueprint $table) {
            $table->string('address')->default('0/0/0');
            $table->tinyInteger('status')->default(0); // 0未知 1启动 -1屏蔽;
        });
    }

    public function down()
    {
        Schema::table('admin_commands', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('status');
        });
    }
}
