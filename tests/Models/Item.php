<?php

namespace Rezkonline\Discounts\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Rezkonline\Discounts\Traits\Discountable;

class Item extends Model
{
    use Discountable;

    protected $fillable = ['name'];
}
