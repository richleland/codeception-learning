<?php
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/admin');
    }

    public function loginSuccessfully(AcceptanceTester $I)
    {
        $I->see('foobar');
    }

    public function loginWithInvalidPassword(AcceptanceTester $I)
    {
        // write a negative login test
    }
}
