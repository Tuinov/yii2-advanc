<?php
namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Get started', 'a');
    }
}
