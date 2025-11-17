<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property int $category_id
 */
class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'category_id'
    ];

    protected $casts = [
        'price' => 'float'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
