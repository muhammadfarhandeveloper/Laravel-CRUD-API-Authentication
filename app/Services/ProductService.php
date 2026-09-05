<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{

    public function __construct(protected ProductRepositoryInterface $productRepository)
    {

    }

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }

    public function getPaginatedProducts(int $perPage = 10){
        return $this->productRepository->paginate($perPage);
    }

    public function createProduct(array $data){
        return $this->productRepository->createProduct($data);
    }

    public function getProductById(int $id){
        return $this->productRepository->getProductById($id);
    }

    public function updateProduct(int $id, array $data){
        return $this->productRepository->updateProduct($id, $data);
    }

    public function deleteProduct(int $id){
        return $this->productRepository->deleteProduct($id);
    }

}

