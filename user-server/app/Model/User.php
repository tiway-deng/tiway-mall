<?php

declare(strict_types=1);

namespace App\Model;


/**
 * @property int $id
 * @property string $nickname
 * @property string $avatar
 * @property string $phone
 * @property string $password
 * @property int $sex
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class User extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'users';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['id', 'nickname', 'phone', 'avatar', 'sex', 'created_at'];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'sex' => 'integer', 'created_at' => 'integer', 'updated_at' => 'integer'];

    protected ?string $dateFormat = 'U';
}
