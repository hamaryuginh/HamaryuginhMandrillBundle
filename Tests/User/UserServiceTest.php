<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 20:44
 */

namespace Hamaryuginh\MandrillBundle\Tests\User;

use Hamaryuginh\MandrillBundle\Manager\MandrillManager;
use Hamaryuginh\MandrillBundle\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class UserServiceTest
 * @package Hamaryuginh\MandrillBundle\Tests\User
 */
class UserServiceTest extends WebTestCase
{
    /**
     * Test user/info
     */
    public function testInfo()
    {
        $kernel = static::createKernel();
        $kernel->boot();

        $container = $kernel->getContainer();

        /** @var MandrillManager $mandrillManager */
        $mandrillManager = $container->get('hamaryuginh.mandrill_manager');
        /** @var UserService $mandrillUser */
        $mandrillUser = $mandrillManager->get('user');

        $result = $mandrillUser->info();

        $this->assertNotEmpty($result->getUsername());
        $this->assertNotEmpty($result->getPublicId());
    }
} 