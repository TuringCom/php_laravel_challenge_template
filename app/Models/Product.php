<?php

namespace Turing\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Turing\ProductCategory;

/**
 * Class Product
 * @package Turing\Models
 * @property int $product_id
 * @property string $name
 * @property string $description
 * @property double $price
 * @property double $discounted_price
 * @property string $image
 * @property string $image_2
 * @property string $thumbnail
 * @property int $display
 * @property Collection $categories
 *
 */
class Product extends Model
{
    public $timestamps = false;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public function categories()
    {
        return $this->hasManyThrough(
            Category::class,
            ProductCategory::class,
            'product_id',
            'category_id',
            'product_id',
            'category_id'
            );
    }
}
