<?php
namespace App\Service;

use App\JsonRpc\ProductRpcServiceInterface;
use App\Model\Order;
use App\Util\Log;
use Hyperf\Di\Annotation\Inject;


class OrderService
{
    #[Inject]
    protected ProductRpcServiceInterface $productRpcServiceInterface;

    public function createOrder($name,$originPrice,$currentPrice):array
    {
        $product = Order::create([
            'order_sn'=> uniqid(''),
            'item_count' => 2,
            'pre_total' => 2,
            'free_total' => 0,
            'pay_total' => 2,
        ]);
        if (empty($product)) {
            Log::get()->info("UserService:用户创建失败");
            $product = new Product();
        }

        return $product->toArray();
    }

    public function getProductDetailById($productId):array
    {
        $res = $this->productRpcServiceInterface->getProductDetailById($productId);

        return $res;
    }

}