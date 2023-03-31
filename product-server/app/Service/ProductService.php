<?php
namespace App\Service;

use App\Model\Product;
use App\Util\Log;

class ProductService
{
    public function createProduct($name,$originPrice,$currentPrice):array
    {
        $product = Product::create([
            'name'=>$name,
            'origin_price' => $originPrice,
            'current_price' => $currentPrice
        ]);
        if (empty($product)) {
            Log::get()->info("UserService:用户创建失败");
            $product = new Product();
        }

        return $product->toArray();
    }

    public function getProductDetailById($productId):array
    {
        $product = Product::find($productId);

        if (empty($product)) {
            Log::get()->info("ProductService:不存在");
            $product = new Product();
        }

        return $product->toArray();
    }

}