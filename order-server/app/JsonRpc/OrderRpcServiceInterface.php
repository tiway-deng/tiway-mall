<?php
namespace App\JsonRpc;

interface OrderRpcServiceInterface
{
    public function getDetailById(int $id);
}