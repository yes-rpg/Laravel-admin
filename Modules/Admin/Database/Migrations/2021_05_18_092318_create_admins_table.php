<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->comment('管理员用户名');
            $table->string('password')->comment('密码');
            $table->tinyInteger('status')->default(1)->comment('管理员状态 1 正常 0禁用');
            $table->timestamp('last_login_time')->comment('最后登录时间');
            $table->string('last_login_ip')->comment('最后登录ip');
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
        Schema::dropIfExists('admins');
    }
}
