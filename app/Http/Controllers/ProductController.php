<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\IndexRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function __construct(private ProductService $service)
    {
    }

    public function store(StoreRequest $request): Product
    {
        return $this->service->create(
            $request->validated()
        );
    }

    public function index(IndexRequest $request): Collection
    {
        return $this->service->getAllProducts($request->validated());
    }

    public function show(int $id): Product
    {
        return $this->service->getProductById($id);
    }
}
