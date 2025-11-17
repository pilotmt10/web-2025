<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function all(array $filters): Collection
    {
        $query = Product::query()
            ->with('category')
            ->orderBy('price');

        if (isset($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        return $query->get();
    }

    public function findById(int $id): ?Product
    {
        return Product::query()
            ->with('category')
            ->where('id', $id)
            ->first();
    }
}
