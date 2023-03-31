<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Service\UserService;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = (new UserService())->getUserDetail(1);
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => $user,
        ];
    }
}
