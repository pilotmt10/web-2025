<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function create(array $data): Product
    {
        return $this->repository->create($data);
    }

    public function getAllProducts(array $filters): Collection
    {
        return $this->repository->all($filters);
    }

    public function getProductById(int $id): Product
    {
        $product = $this->repository->findById($id);

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден.');
        }

        return $product;
    }
}
