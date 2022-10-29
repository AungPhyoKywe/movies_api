<?php

namespace Movies\Api\Product\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Movies\Api\Product\Models\Product;

interface ProductRepositoryInterface
{
    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getProducts(array $params): Collection;

    /**
     * @param int $id
     * 
     * @return Product|null
     */
    public function getProductById(int $id): ?Product;

    /**
     * @param array $params
     * 
     * @return Product
     */
    public function createProduct(array $params): Product;

    /**
     * @param int $id
     * @param array $params
     * 
     * @return bool
     */
    public function updateProdct(int $id, array $params): bool;

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteProductById(int $id): bool;
}
