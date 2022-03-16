<?php


namespace App\Module;


use App\Models\ProductModel;

class Shop
{
    private ShopRepository $repository;

    public function __construct($dbConnection)
    {
        $this->repository = new ShopRepository($dbConnection);
    }

    public function listProducts(int $limit=null): array
    {
        return $this->repository->getListProducts([], $limit);
    }

    public function addProduct(array $dataNewProduct):array
    {
        return $this->repository->addProduct($dataNewProduct);
    }
}