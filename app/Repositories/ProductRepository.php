<?php

namespace App\Repositories;

class ProductRepository
{
    public function all(): array
    {
        return [
            ['id' => 1, 'name' => 'Товар 1'],
            ['id' => 2, 'name' => 'Товар 2'],
            ['id' => 3, 'name' => 'Товар 3'],
            ['id' => 4, 'name' => 'Товар 4']
        ];
    }

    public function findById(int $id): array
    {
        return [
            'id' => $id,
            'name' => 'Товар 1'
        ];
    }
}
