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
namespace HyperfTest\Cases;

use App\Service\UserService;
use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class UserServiceTest extends HttpTestCase
{

    public function testCreateUser()
    {
        $model = \Hyperf\Utils\ApplicationContext::getContainer()->get(UserService::class)->createUser('tiway','','','13566696969',1);

        var_dump($model);

        $this->assertSame('tiway', $model['nickname']);
    }

    public function testGetUserDetail()
    {
        $model = \Hyperf\Utils\ApplicationContext::getContainer()->get(UserService::class)->getUserDetail(1);

        var_dump($model);

        $this->assertSame(1, $model['id']);
    }
}
