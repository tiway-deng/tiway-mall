<?php
namespace App\JsonRpc;

interface ProductRpcServiceInterface
{
    public function getProductDetailById(int $productId);

    public function createProduct(string $name, int $originPrice, int $currentPrice);

}