<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function getAllProducts(): array
    {
        return $this->repository->all();
    }

    public function getProductById(int $id): array
    {
        return $this->repository->findById($id);
    }
}
