<?php

namespace App\Services;

use App\Exceptions\ErrorCommand;
use App\Exceptions\ProductsAmountBiggerThanInStore;
use Illuminate\Http\Request;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class ShoppingCartService
{
    private $sessionKeyName = 'shopping-cart';
    private $sessionProdutsListKey = 'products';
    private $sessionProductsPriceKey = 'price';
    private $sessionProductsAmountKey = 'amount';
    private $request;
    private $discountsService;

    /**
     * ShoppingCart constructor.
     * @param Request $request
     * @param DiscountsService $discountsService
     */
    public function __construct(
        Request $request,
        DiscountsService $discountsService
    )
    {
        $this->request = $request;
        $this->discountsService = $discountsService;
    }

    /**
     * @return array|mixed
     */
    public function getList()
    {
        $this->deleteItemWithZeroAmount();
        return $this->defineProperOrderOfProducts();
    }

    public function defineProperOrderOfProducts()
    {
        $sessionCart = $this->request->session()->get($this->sessionKeyName) ?? [];
        $orderedShoppingCart = [];

        foreach($sessionCart as $item) {
            $orderedShoppingCart[app('productsService')->getProductShoppingOrderById($item['id'])] = $item;
        }

        ksort($orderedShoppingCart);

        return array_values($orderedShoppingCart);
    }

    public function isEmpty()
    {
        return $this->request->session()->get($this->sessionKeyName) ? false : true;
    }

    public function deleteItemWithZeroAmount()
    {
        $sessionCart = $this->request->session()->get($this->sessionKeyName) ?? [];

        foreach ($sessionCart as $key => $item) {
            if ($item['amount'] <= 0) {
                unset($sessionCart[$key]);
                $this->request->session()->put($this->sessionKeyName, $sessionCart);
            }
        }
    }

    /**
     * @param $productId
     * @param $amount
     * @throws ProductsAmountBiggerThanInStore
     */
    public function isProductsHasSuchAmount($productId, $amount)
    {
        if (!app('productsService')->isProductHasSuchAmount($productId, $amount)) {
            throw new ProductsAmountBiggerThanInStore();
        }
    }

    public function set($item)
    {
        $sessionCart = $this->getList();

        if ($this->has($item['id'])) {
            for ($i = 0; $i < count($sessionCart); $i++)
                if ($sessionCart[$i]['id'] === (int)$item['id']) {
                    $sessionCart[$i]['amount'] = (int)$item['amount'];
                }
        } else {
            $sessionCart[] = [
                'id' => (int)$item['id'],
                'title' => $item['title'],
                'price' => $item['price'],
                'amount' => (int)$item['amount']
            ];
        }

        $this->request->session()->put($this->sessionKeyName, $sessionCart);
    }

    /**
     * @param $item
     * @return array|mixed
     * @throws ProductsAmountBiggerThanInStore
     */
    public function add($item)
    {
        $sessionCart = $this->getList();

//        $this->isProductsHasSuchAmount($item['id'], $item['amount']);

        if ($sessionCart === null)
            $this->request->session()->put($this->sessionKeyName, []);

        if ($this->has($item['id'])) {
            for ($i = 0; $i < count($sessionCart); $i++)
                if ($sessionCart[$i]['id'] === $item['id']) {
                    $sessionCart[$i]['amount'] += $item['amount'];
//                    $this->isProductsHasSuchAmount($item[$i]['id'], $item[$i]['amount']);
                    $this->request->session()->put($this->sessionKeyName, $sessionCart);
                }
        } else {
            $sessionCart[] = $item;
            $this->request->session()->put($this->sessionKeyName, $sessionCart);
        }

        return $this->getList();
    }

    /**
     * @param $productId
     * @return bool
     */
    public function has($productId)
    {
        $productId = (int)$productId;
        $shoppingCart = $this->getList();

        for ($i = 0; $i < count($shoppingCart); $i++)
            if ($shoppingCart[$i]['id'] === $productId)
                return true;

        return false;
    }

    /**
     * @return mixed
     */
    public function getTotalPriceWithoutDiscounts()
    {
        $totalPrice = 0;
        $shoppingCartList = $this->getList();

        for ($i = 0; $i < count($shoppingCartList); $i++) {
            $totalPrice += $shoppingCartList[$i]["amount"] * app('productsService')->getPriceByItemId($shoppingCartList[$i]['id']);
        }

        return $totalPrice;
    }

    public function getTotalPriceOfProductsWithActiveDiscount()
    {
        $price = 0;
        $shoppingCartList = $this->getList();

        for ($i = 0; $i < count($shoppingCartList); $i++) {
            if (app('productsService')->isConsiderDiscountForProduct($shoppingCartList[$i])) {
                $price += $shoppingCartList[$i]["amount"] * app('productsService')->getPriceByItemId($shoppingCartList[$i]['id']);
            }
        }

        return $price;
    }

    /**
     * @return number
     */
    public function getTotalPrice()
    {
        $totalPriceWithoutDiscount = $totalPriceWithDiscount = 0;
        $shoppingCartList = $this->getList();

        for ($i = 0; $i < count($shoppingCartList); $i++) {
            if (app('productsService')->isConsiderDiscountForProduct($shoppingCartList[$i])) {
                $totalPriceWithDiscount += $shoppingCartList[$i]["amount"] * app('productsService')->getPriceByItemId($shoppingCartList[$i]['id']);
            } else {
                $totalPriceWithoutDiscount += $shoppingCartList[$i]["amount"] * app('productsService')->getPriceByItemId($shoppingCartList[$i]['id']);
            }
        }

        return $this->discountsService->getPriceWithDiscounts($totalPriceWithDiscount) + $totalPriceWithoutDiscount;
    }

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        $totalAmount = 0;
        $shoppingCartList = $this->getList();

        for ($i = 0; $i < count($shoppingCartList); $i++) {
            $totalAmount += $shoppingCartList[$i]["amount"];
        }

        return $totalAmount;
    }

    /**
     * @param $productId
     * @return bool|mixed
     */
    public function get($productId)
    {
        $productId = (int)$productId;
        $shoppingCart = $this->getList();

        for ($i = 0; $i < count($shoppingCart); $i++)
            if ($shoppingCart[$i]['id'] === $productId)
                return $shoppingCart[$i];

        return false;
    }

    /**
     * @param $productId
     * @param $newItemData
     * @return array|bool|mixed
     */
    public function update($productId, $newItemData)
    {
        $productId = (int)$productId;
        $shoppingCart = $this->getList();

        if (!$shoppingCart || !$this->has($productId))
            return false;

        for ($i = 0; $i < count($shoppingCart); $i++)
            if ($shoppingCart[$i]['id'] === $productId) {
                $shoppingCart[$i] = $newItemData;
                $this->request->session()->put($this->sessionKeyName, $shoppingCart);
            }

        return $this->getList();
    }

    /**
     * @return bool
     */
    public function clear()
    {
        $this->request->session()->put($this->sessionKeyName, []);

        return $this->getList() === [];
    }

    /**
     * @param $productId
     * @return array|bool|mixed
     */
    public function delete($productId)
    {
        $productId = (int)$productId;
        $shoppingCart = $this->getList();

        if ($shoppingCart === null || !$this->has($productId))
            return false;

        for ($i = 0; $i < count($shoppingCart); $i++)
            if ($shoppingCart[$i]['id'] === $productId) {
                unset($shoppingCart[$i]);
                $this->request->session()->put($this->sessionKeyName, $shoppingCart);
            }

        return $this->getList();
    }
}