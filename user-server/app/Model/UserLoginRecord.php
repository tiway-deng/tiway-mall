<?php

declare(strict_types=1);

namespace App\Model;



/**
 * @property int $id 
 * @property int $user_id 
 * @property string $IP 
 * @property string $origin 
 * @property \Carbon\Carbon $created_at 
 */
class UserLoginRecord extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'user_login_records';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'user_id' => 'integer', 'created_at' => 'datetime'];
}
