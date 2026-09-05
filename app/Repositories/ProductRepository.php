<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductRepository implements ProductRepositoryInterface{

    public function getAllProducts(): Collection{
        return Product::get();
    }

    public function paginate(int $perPage = 10): LengthAwarePaginator{
        return Product::paginate($perPage);
    }

    public function getProductById(int $id){
        return Product::find($id);
    }

    public function createProduct(array $data): Product{
        return Product::create($data);
    }

    public function updateProduct(int $id, array $data): Product{
        $product = $this->getProductById($id);
        $product->update($data);
        return $product;
    }

    public function deleteProduct(int $id): bool{
        $product = $this->getProductById($id);
        return $product->delete();
    }
}



?>
