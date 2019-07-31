<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * @package App\Models
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
