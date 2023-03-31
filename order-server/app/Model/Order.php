<?php

declare(strict_types=1);

namespace App\Model;



/**
 * @property int $id 
 * @property string $order_sn 
 * @property int $item_count 
 * @property string $pre_total 
 * @property string $free_total 
 * @property string $pay_total 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Order extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'order';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'item_count' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
