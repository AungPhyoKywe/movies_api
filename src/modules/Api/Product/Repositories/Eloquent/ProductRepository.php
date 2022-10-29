<?php

namespace Movies\Api\Product\Repositories\Eloquent;

use Movies\Api\Product\Models\Product;
use Movies\Api\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Movies\Foundation\Repositories\Repository;

/**
 * class ProductRepository.
 */
class ProductRepository extends Repository implements ProductRepositoryInterface
{

    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getProducts(array $params): Collection
    {
        return $this->model->skip($params['offset'])->take($params['limit'])->latest()->get();
    }

    /**
     * @param int $id
     * 
     * @return Product|null
     */
    public function getProductById(int $id): ?Product
    {
        return $this->model->find($id);
    }

    /**
     * @param array $params
     * 
     * @return Product
     */
    public function createProduct(array $params): Product
    {
        return $this->model->create($params);
    }

    /**
     * @param int $id
     * @param array $product
     * 
     * @return bool
     */
    public function updateProdct(int $id, array $product): bool
    {
        return $this->model->where('id', $id)->update($product);
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteProductById(int $id): bool
    {
        return $this->model->where('id', $id)->delete();
    }

    protected function model()
    {
        return Product::class;
    }

    protected function adminRelation(): string
    {
        return 'Product';
    }
}
