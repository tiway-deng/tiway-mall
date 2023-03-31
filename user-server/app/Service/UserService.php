<?php

namespace App\Service;

use App\Model\User;
use App\Util\Log;

class UserService
{
    public function createUser($nickname, $avatar, $password, $phone, $sex): array
    {
        Log::get()->info("UserService:createUser");
        $user = User::create([
            'nickname' => $nickname,
            'avatar' => $avatar,
            'password' => $password,
            'phone' => $phone,
            'sex' => $sex,
        ]);

        if (empty($user)) {
            Log::get()->info("UserService:用户创建失败");
            $user = new User();
        }

        return $user->toArray();
    }

    public function getUserDetail(int $userId): array
    {
        $user = User::query()->find($userId);

        if (empty($user)) {
            Log::get()->info("UserService:用户不存在");
            $user = new User();
        }

        return $user->toArray();
    }

}