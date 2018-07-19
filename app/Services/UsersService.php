<?php

namespace App\Services;

use App\Http\Requests\Users\Store;
use App\Models\Discount;
use App\Models\PricesType;
use App\Models\Product;
use App\Models\User;
use App\Models\UsersType;
use App\Models\UsersTypesPricesTypesRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class UsersService
{
    public function getAuthUser()
    {
        return JWTAuth::getToken() ? JWTAuth::toUser(JWTAuth::getToken()) : false;
    }

    public function isUserAuthorized()
    {
        return !!JWTAuth::getToken();
    }

    public function getAuthUserEmail()
    {
        return Auth::guard('users')->check() ? Auth::guard('users')->user()->email : null;
    }

    public function isPhoneNumberAvailable()
    {

    }

    public function createUserWithoutPassword(Store $request)
    {
        User::create($request->all());
    }

    public function registerNewEmail($email)
    {
        $user = new User();
        $user->email = $email;
    }

    public function createNewUser()
    {

    }
}