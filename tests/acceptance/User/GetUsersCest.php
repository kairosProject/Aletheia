<?php
declare(strict_types=1);
/**
 * This file is part of the aletheia project.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 5.6
 *
 * @category Test
 * @package  Aletheia
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace tests\acceptance\User;

use Codeception\Util\HttpCode;

/**
 * Get user test
 *
 * This class is used to validate the GET users response
 *
 * @category Test
 * @package  Aletheia
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class GetUsersCest
{
    /**
     * Test GET users
     *
     * Validate the GET multiple users is valid
     *
     * @return void
     */
    public function testGetUsers(\AcceptanceTester $I) : void
    {
        $I->sendGET('/user/');
        $I->seeResponseCodeIs(HttpCode::OK);

        $I->canSeeResponseIsJson();

        $I->canSeeResponseJsonMatchesJsonPath('$[*].id');
        $I->canSeeResponseJsonMatchesJsonPath('$[*].username');
        $I->canSeeResponseJsonMatchesJsonPath('$[*].roles[*].id');
    }
}

