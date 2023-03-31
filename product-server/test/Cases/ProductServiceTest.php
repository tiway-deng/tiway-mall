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

use App\Service\ProductService;
use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class ProductServiceTest extends HttpTestCase
{
    public function getService()
    {
        return \Hyperf\Utils\ApplicationContext::getContainer()->get(ProductService::class);
    }

    public function testCreateProduct()
    {
        $model = $this->getService()->createProduct("航母", 12, 10);
        var_dump($model);
        $this->assertSame('航母', $model['name']);

    }

    public function testGetProductDetail()
    {
        $product = $this->getService()->getProductDetailById(1);
        $this->assertSame(1, $product['id']);
    }
}
