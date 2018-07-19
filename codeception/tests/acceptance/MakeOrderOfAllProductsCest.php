<?php


class MakeOrderOfAllProductsCest
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

    private $listOfCategoriesUrls = [
        '/categories/1',
        '/categories/2',
        '/categories/3',
        '/categories/4'
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
        foreach ($this->listOfCategoriesUrls as $url) {
            $this->addProductsToCart($I, $url);
        }
        $I->wait(1);
        $this->goToShoppingCart($I);
        $I->wait(3);
        $this->goToOrderForm($I);
        $this->fillOrderFormData($I);
        $I->seeInCurrentUrl('/');
        $I->wait(1);
    }

//    private function goToCategoryPage(AcceptanceTester $I)
//    {
//        $I->amOnPage('/');
//        $buttonsList = $I->grabMultiple($this->selectors['go-to-category-button'], 'href');
//        $I->click($this->selectors['go-to-category-button'] . '[href=\'' . $buttonsList[array_rand($buttonsList)] . '\']');
//        $I->see('Фоторамки');
//    }

    private function addProductsToCart(AcceptanceTester $I, $url)
    {
        $I->amOnPage($url);
        $productsList = $I->grabMultiple($this->selectors['product-input'], 'data-product-id');
        for ($i = 0; $i < count($productsList); $i++) {
            $I->fillField('//input[@data-product-id=' . $productsList[$i] . ']', 1);
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
