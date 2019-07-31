<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false;

    protected $table = 'shipping';
    protected $primaryKey = 'shipping_id';
}
