<?php
namespace App\JsonRpc;

use App\Exception\JsonRpcException;
use App\Service\ProductService;
use App\Util\Log;
use Hyperf\Di\Annotation\Inject;
use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: "ProductRpcService", protocol: "jsonrpc-http", server: "jsonrpc-http", publishTo: "nacos")]
class ProductRpcService implements ProductRpcServiceInterface
{

    #[Inject]
    protected ProductService $productService;

    /**
     * @param int $productId
     * @return array
     */
    public function getProductDetailById(int $productId)
    {
        $product = $this->productService->getProductDetailById($productId);

        if (empty($product['id'])) {
            Log::get()->info('grpc:商品不存在');
            throw new JsonRpcException(4033,'商品不存在');

        }

        return $product;
    }

    public function createProduct(string $name, int $originPrice, int $currentPrice)
    {
        $product = $this->productService->createProduct($name,$originPrice,$currentPrice);

        if (empty($product['id'])) {
            Log::get()->info('grpc:商品不存在');
            throw new JsonRpcException(4033,'商品创建失败');
        }
    }
}