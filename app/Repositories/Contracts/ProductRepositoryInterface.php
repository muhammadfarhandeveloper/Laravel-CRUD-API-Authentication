<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface{

    public function getAllProducts() : Collection;

    public function paginate(int $perPage = 10): LengthAwarePaginator;

    public function getProductById(int $id);

    public function createProduct(array $data): Product;

    public function updateProduct(int $id, array $data): Product;

    public function deleteProduct(int $id): bool;

}


?>
