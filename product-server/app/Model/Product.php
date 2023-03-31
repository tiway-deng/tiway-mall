<?php

declare(strict_types=1);

namespace App\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $origin_price
 * @property string $current_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'products';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['id','name', 'origin_price', 'current_price'];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'created_at' => 'integer', 'updated_at' => 'integer'];

    protected ?string $dateFormat = 'U';
}
