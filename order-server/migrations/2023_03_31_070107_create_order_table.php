<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_sn', 32)->nullable()->comment('订单号');
            $table->integer('item_count')->unsigned()->default(0)->comment('商品数');
            $table->decimal('pre_total')->unsigned()->default(0.00)->comment('折扣前总金额');
            $table->decimal('free_total')->unsigned()->default(0.00)->comment('折扣金额');
            $table->decimal('pay_total')->unsigned()->default(0.00)->comment('最后支付金额');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
}
