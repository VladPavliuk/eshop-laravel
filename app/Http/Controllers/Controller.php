<?php

namespace App\Http\Controllers;

use App\Services\DiscountsService;
use App\Services\ProductsService;
use App\Services\UsersTypeService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Services\ShoppingCartService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $shoppingCardService;
    protected $discountsService;
    protected $productsService;
    protected $usersTypeService;

    public function __construct(
        ShoppingCartService $shoppingCardService,
        DiscountsService $discountsService,
        ProductsService $productsService,
        UsersTypeService $usersTypeService
    ){
        $this->shoppingCardService = $shoppingCardService;
        $this->discountsService = $discountsService;
        $this->productsService = $productsService;
        $this->usersTypeService = $usersTypeService;
    }
}
