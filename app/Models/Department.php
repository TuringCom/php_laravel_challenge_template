<?php

namespace Turing\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * @package Turing\Models
 * @property int $department_id
 * @property string $name
 *
 */
class Department extends Model
{
    public $timestamps = false;
    protected $table = 'department';
    protected $primaryKey = 'department_id';
}
