<?php


namespace Movies\Api\Product\Services;

use Movies\Api\Product\Repositories\Eloquent\ProductRepository;
use Movies\Api\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Movies\Api\Product\Models\Product;

class ProductService
{
    /**
     * @var Product
     */
    protected $model;

    /**
     * @var limit
     */
    protected int $limit = 30;

    /**
     * @var offset
     */
    protected int $offset = 0;

    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;


    /**
     * ProductService Constructor
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {

        $this->productRepository = $productRepository;
    }

    /**
     * @param array $params
     *
     * @return Collection
     */
    public function getAllProduct(array $params): Collection
    {
        $params['limit'] = isset($params['limit']) ? $params['limit'] : $this->limit;
        $params['offset'] = isset($params['offset']) ? $params['offset'] : $this->offset;
        return $this->productRepository->getProducts($params);
    }

    /**
     * @param array $params
     * 
     * @return Product
     */
    public function createProduct(array $params): Product
    {
        try {
            $this->productRepository->beginTransaction();
            $product = $this->productRepository->createProduct($params);
            $this->productRepository->commit();
        } catch (\Exception $e) {
            Log::error("create Product", ['e' => $e->getMessage()]);
            $this->productRepository->rollback();
            throw new \RuntimeException('Inserting product data to DB was failed!');
        }

        return $product;
    }

    /**
     * @param int $id
     * 
     * @return Product|null
     */
    public function getProductById(int $id): ?Product
    {
        return $this->productRepository->getProductById($id);
    }

    /**
     * @param array $params
     * 
     * @return bool
     */
    public function updateProduct(int $id, array $params): bool
    {
        try {
            $this->productRepository->beginTransaction();
            $product = $this->productRepository->updateProdct($id, $params);
            $this->productRepository->commit();
        } catch (\Exception $e) {
            Log::error("Update Product", ['e' => $e->getMessage()]);
            $this->productRepository->rollback();
            throw new \RuntimeException('Inserting product data to DB was failed!');
        }

        return $product;
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteProductById(int $id): bool
    {
        try {
            $this->productRepository->beginTransaction();
            $product = $this->productRepository->deleteProductById($id);
            $this->productRepository->commit();
        } catch (\Exception $e) {
            Log::error("Delete Product", ['e' => $e->getMessage()]);
            $this->productRepository->rollback();
            throw new \RuntimeException('Deleting product data to DB was failed!');
        }

        return $product;
    }
}
