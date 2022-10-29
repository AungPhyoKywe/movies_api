<?php

namespace Movies\Api\Product\Controllers;

use Illuminate\Http\Response;
use Movies\Api\BaseController;
use Movies\Api\Product\Resources\ProductResource;
use Movies\Api\Product\Services\ProductService;
use Movies\Api\Product\Validation\CreateProductRequest;
use Movies\Api\Product\Validation\FetchProductRequest;
use Movies\Api\Product\Validation\UpdateProductRequest;

class ProductController extends BaseController
{
    /**
     * @var DEFAULT_LIMIT
     */
    const DEFAULT_LIMIT = 30;

    /**
     * @var DEFAULT_OFFSET
     */
    const DEFAULT_OFFSET = 0;

    public function __construct(
        ProductService $productService,

    ) {
        $this->productService = $productService;
        $this->startTime = microtime(true);
    }
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProduct(FetchProductRequest $request)
    {
        $inputs = $request->only('limit', 'offset');

        $this->limit = isset($inputs['limit']) ? $inputs['limit'] :  self::DEFAULT_LIMIT;
        $this->offset = isset($inputs['offset']) ? $inputs['offset'] :  self::DEFAULT_OFFSET;

        $products = $this->productService->getAllProduct($inputs);

        $this->total = $products->count();

        return $this->sendResponse(ProductResource::collection($products), Response::HTTP_OK);
    }
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProduct(CreateProductRequest $request)
    {
        $product = $this->productService->createProduct($request->all());

        return $this->sendResponse(new ProductResource($product), Response::HTTP_CREATED);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProductById(int $id)
    {
        $product = $this->productService->getProductById($id);

        if (is_null($product)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        return $this->sendResponse(new ProductResource($product), Response::HTTP_OK);
    }

    /**
     * @param  UpdateProductRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProductById(int $id, UpdateProductRequest $request)
    {
        $product = $this->productService->getProductById($id);

        if (is_null($product)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        $updated = $this->productService->updateProduct($id, $request->all());

        return $this->sendResponse(['updated' => (int)$updated], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProductById(int $id)
    {
        $product = $this->productService->getProductById($id);

        if (is_null($product)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }
        $deleted = $this->productService->deleteProductById($id);

        return $this->sendResponse(['deleted' => (int)$deleted], Response::HTTP_CREATED);
    }
}
