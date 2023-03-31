<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->unsigned()->default(0)->comment('订单id');
            $table->integer('product_id')->unsigned()->default(0)->comment('商品id');
            $table->decimal('price')->unsigned()->default(0.00)->comment('单价');
            $table->integer('buy_num')->unsigned()->default(0)->comment('购买数量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
}
