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

use App\Service\OrderService;
use Hyperf\Di\Annotation\Inject;

class IndexController extends AbstractController
{
    #[Inject]
    protected OrderService $orderService;

    public function index()
    {
        $config = config('nacos_config.test');

        return [
            'product'=>$this->orderService->getProductDetailById(1),
            'config' => $config
        ];

    }
}
