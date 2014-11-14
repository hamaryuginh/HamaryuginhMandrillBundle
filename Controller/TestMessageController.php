<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 21:17
 */

namespace Hamaryuginh\MandrillBundle\Controller;

use Hamaryuginh\MandrillBundle\Model\Request\Message\Message;
use Hamaryuginh\MandrillBundle\Services\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class TestMessageController
 * @package Hamaryuginh\MandrillBundle\Controller
 * @Route("/test/message")
 */
class TestMessageController extends Controller
{
    /**
     * @Route(path="/send", name="mandrill_test_message_send")
     */
    public function sendAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var MessageService $messageService */
        $messageService = $manager->get('message');

        $message = new Message();
        $message
            ->setSubject('Message subject')
            ->setHtml('<html><body>HTML content goes here</body></html>')
            ->setText('Text content goes here')
            ->addTag('test-api')
            ->setFromEmail('from.me@foo.bar')
            ->setFromName('From Me')
            ->addTo('sark.julian.alias@gmail.com')
        ;

        $response = $messageService->send($message);

        var_dump($response);

        return new Response();
    }

    /**
     * @Route(path="/send_template", name="mandrill_test_message_send_template")
     */
    public function sendTemplateAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');

        /** @var MessageService $messageService */
        $messageService = $manager->get('message');

        $message = new Message();
        $message
            ->setSubject('Test Send Template')
            ->addTag('test-api')
            ->setFromEmail('from.me@foo.bar')
            ->setFromName('From Me')
            ->addTo('sark.julian.alias@gmail.com')
        ;

        $templateName = 'vervalicious-new-a';
        $templateContent = array(
            array(
                'name'    => 'example name',
                'content' => 'example content'
            )
        );

        $response = $messageService->sendTemplate($templateName, $templateContent, $message);

        var_dump($response);

        return new Response();
    }

    /**
     * @Route(path="/search", name="mandrill_test_message_search")
     */
    public function searchAction()
    {
        $manager = $this->get('hamaryuginh.mandrill_manager');
        /** @var MessageService $messageService */
        $messageService = $manager->get('message');

        $response = $messageService->search('email:gmail.com', '2014-09-01', '2014-11-15');

        var_dump($response);

        return new Response();
    }
} 