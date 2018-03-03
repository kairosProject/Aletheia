<?php
namespace tests\acceptance\User;

class GetUsersCest
{
    public function testGetUsers(\AcceptanceTester $I)
    {
        $I->amOnPage('/user');
    }
}

