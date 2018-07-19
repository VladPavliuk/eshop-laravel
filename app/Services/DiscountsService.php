<?php

namespace App\Services;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class DiscountsService
{
    /**
     * @param $price
     * @return array
     */
    public function getActiveDiscountsList($price)
    {
        $activeDiscountsList = [];

        foreach ($this->getDiscountsList() as $discount)
            if ($price >= $discount->active_from_value)
                $activeDiscountsList[] = $discount;

        return $activeDiscountsList;
    }

    /**
     * @param $inputPrice
     * @return float|int
     */
    public function getPriceWithDiscounts($inputPrice)
    {
        $outputPrice = $inputPrice;

        foreach ($this->getDiscountsList() as $discount)
            if ($inputPrice >= $discount->active_from_value) {
                $outputPrice = $discount->numeric_discount_value > 0 ? $inputPrice - $discount->numeric_discount_value : $outputPrice;
                $outputPrice = $discount->percent_discount_value > 0 ? $inputPrice - $outputPrice * $discount->percent_discount_value / 100 : $outputPrice;
            }

        return $outputPrice;
    }

    /**
     * @param $price
     * @return array
     */
    public function getInActiveDiscountsList($price)
    {
        $inActiveDiscountsList = [];

        foreach ($this->getDiscountsList() as $discount)
            if ($price < $discount->active_from_value)
                $inActiveDiscountsList[] = $discount;

        return $inActiveDiscountsList;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDiscountsList()
    {
        return Discount::userType()
            ->where('users_types.id', app('usersTypeService')->getAuthUserType()->id)
            ->get();
    }
}