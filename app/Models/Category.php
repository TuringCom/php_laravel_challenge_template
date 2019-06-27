<?php

namespace Turing\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package Turing\Models
 * @property  int $category_id
 * @property string $name
 * @property \Turing\Models\Department $department
 *
 */
class Category extends Model
{
    public $timestamps = false;

    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    public function isIn(int $department_id)
    {
        return $department_id == $this->getAttribute('department_id');
    }
}
