<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(private ProductService $service)
    {
    }

    public function index(): array
    {
        return $this->service->getAllProducts();
    }

    public function show(int $id): array
    {
        return $this->service->getProductById($id);
    }
}
