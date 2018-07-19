<?php

namespace App\Services;

use App\Models\Discount;
use App\Models\PricesType;
use App\Models\Product;
use App\Models\UsersType;
use App\Models\UsersTypesPricesTypesRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class UsersTypeService
{
    private $defaultUserTypeId = 1;

    public function getAuthUserType()
    {
        return app('usersService')->isUserAuthorized()
            ? app('usersService')->getAuthUser()->with('type')->first()->type
            : UsersType::where('id', $this->defaultUserTypeId)->first();
    }

    public function getAuthUserPriceType()
    {
        return UsersTypesPricesTypesRelation::with('priceType')
            ->where('users_type_id', $this->getAuthUserType()->id)
            ->first()
            ->priceType;
    }
}