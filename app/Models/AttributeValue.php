<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    public $timestamps = false;

    protected $table = 'attribute_value';
    protected $primaryKey = 'attribute_value_id';

}
