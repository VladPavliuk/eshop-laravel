<?php


class MakeOrderCest
{
    private $selectors = [
        'go-to-category-button' => '.card .card-body .btn',
        'product-input' => '.product-item input'
    ];

    private $personsNames = [
        'Juan',
        'Luis',
        'Pedro',
        'Andry',
        'Johna',
        'KusNeKus',
        'Vladd'
    ];

    private $maxAmountOfOrderedProducts = 10;
    private $maxAmountOfOrderedProductsInOneCategory = 5;
    private $maxAmountOfVisitingOfCategory = 5;

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        for ($i = 0; $i < rand(1, $this->maxAmountOfVisitingOfCategory); $i++) {
            $this->goToCategoryPage($I);
            $this->addProductsToCart($I);
        }

        $this->goToShoppingCart($I);
        $I->wait(3);
        $this->goToOrderForm($I);
        $this->fillOrderFormData($I);
        $I->seeInCurrentUrl('/');
        $I->wait(1);
    }

    private function goToCategoryPage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $buttonsList = $I->grabMultiple($this->selectors['go-to-category-button'], 'href');
        $I->click($this->selectors['go-to-category-button'] . '[href=\'' . $buttonsList[array_rand($buttonsList)] . '\']');
        $I->see('Фоторамки');
    }

    private function addProductsToCart(AcceptanceTester $I)
    {
        $productsList = $I->grabMultiple($this->selectors['product-input'], 'data-product-id');
        for ($i = 0; $i < rand(1, $this->maxAmountOfOrderedProductsInOneCategory); $i++) {
            $I->fillField('//input[@data-product-id=' . $productsList[array_rand($productsList)] . ']', rand(1, $this->maxAmountOfOrderedProducts));
        }

    }

    private function goToShoppingCart(AcceptanceTester $I)
    {
        $I->seeElement(['id' => 'go-to-shopping-cart']);
        $I->click(['id' => 'go-to-shopping-cart']);
    }

    private function goToOrderForm(AcceptanceTester $I)
    {
        $I->scrollTo(['css' => '#go-to-order-form'], 0, 50);
        $I->seeElement(['id' => 'go-to-order-form']);
        $I->click(['id' => 'go-to-order-form']);
    }

    private function fillOrderFormData(AcceptanceTester $I)
    {
        $form = [
            'full_name' => $this->_generateCustomerName(),
            'phone_number' => $this->_generateCustomerPhone(),
            'settlement_to_send' => $this->_generateCustomerName(),
            'department' => $this->_generateCustomerName(),
        ];

        $I->submitForm('#order-form', $form);
    }

    private function _generateCustomerName()
    {
        $name = '';
        for ($i = 0; $i < rand(1, 3); $i++) {
            $name .= ' ' . $this->personsNames[rand(0, count($this->personsNames) - 1)];
        }

        return $name;
    }

    private function _generateCustomerPhone()
    {
        $phone = '0';
        for ($i = 0; $i < 9; $i++) {
            $phone .= rand(0, 9);
        }

        return $phone;
    }
}
