<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 20:53
 */

namespace Hamaryuginh\MandrillBundle\Controller;

use Hamaryuginh\MandrillBundle\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class TestUserController
 * @package Hamaryuginh\MandrillBundle\Controller
 * @Route("/test/user")
 */
class TestUserController extends Controller
{
    /**
     * @Route(path="/info", name="mandrill_test_user_info")
     */
    public function userInfoAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var UserService $userService */
        $userService = $manager->get('user');
        $response = $userService->info();
        var_dump($response);

        return new Response();
    }

    /**
     * @Route(path="/ping", name="mandrill_test_user_ping")
     */
    public function userPingAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var UserService $userService */
        $userService = $manager->get('user');
        $response = $userService->ping();
        var_dump($response);

        return new Response();
    }

    /**
     * @Route(path="/ping2", name="mandrill_test_user_ping2")
     */
    public function userPing2Action()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var UserService $userService */
        $userService = $manager->get('user');
        $response = $userService->ping2();
        var_dump($response);

        return new Response();
    }

    /**
     * @Route(path="/senders", name="mandrill_test_user_senders")
     */
    public function userSendersAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var UserService $userService */
        $userService = $manager->get('user');
        $response = $userService->senders();
        var_dump($response);

        return new Response();
    }
} 