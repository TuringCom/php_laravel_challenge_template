<?php

namespace Turing;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategory
 * @package Turing
 * @param int $product_id
 * @param int $category_id
 *
 */
class ProductCategory extends Model
{
    use HasCompositePrimaryKey;

    public $timestamps = false;

    protected $table = 'product_category';
    protected $primaryKey = ['product_id', 'category_id'];
}
