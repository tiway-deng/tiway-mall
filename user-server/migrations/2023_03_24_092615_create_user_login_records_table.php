<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateUserLoginRecordsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_login_records', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned()->default(0)->comment('昵称');
            $table->string('IP', 255)->nullable()->comment('ip');
            $table->string('origin', 255)->nullable()->comment('来源');
            $table->integer('created_at')->default(0)->comment('创建时间');

            $table->comment('用户登录记录表');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_login_records');
    }
}
