<?php

declare(strict_types=1);

namespace App\Model;



/**
 * @property int $id 
 * @property int $order_id 
 * @property int $product_id 
 * @property string $price 
 * @property int $buy_num 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class OrderItem extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'order_item';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'order_id' => 'integer', 'product_id' => 'integer', 'buy_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
