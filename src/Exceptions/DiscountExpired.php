<?php

namespace Rezkonline\Discounts\Exceptions;

use Rezkonline\Discounts\Models\Discount;

class DiscountExpired extends \Exception
{
    protected $message = 'The discount is already expired.';

    /**
     * @var \App\Models\Discount
     */
    protected $discount;

    /**
     * DiscountExpired constructor.
     *
     * @param  \App\Models\Discount  $discount
     */
    public function __construct(Discount $discount)
    {
        $this->discount = $discount;
    }

    /**
     * @param  \App\Models\Discount  $discount
     * @return mixed
     */
    public static function create(Discount $discount)
    {
        return new static($discount);
    }
}
