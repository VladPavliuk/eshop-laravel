<?php


class ShowCategoryPageCest
{
    private $selectors = [
        'go-to-category-button' => '.card .card-body .btn'
    ];

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $buttonsList = $I->grabMultiple($this->selectors['go-to-category-button'], 'href');
        $I->click($this->selectors['go-to-category-button'] .'[href=\'' . ($buttonsList[array_rand($buttonsList)]) . '\']');
        $I->see('Категорія');
    }
}
