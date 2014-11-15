<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 21:41
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

use Hamaryuginh\MandrillBundle\Model\AbstractMandrillResponse;

/**
 * Class SearchResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 */
class SearchResponse extends AbstractMandrillResponse
{
    /** @var array $messages */
    protected $messages;

    /**
     * @param $result
     * @return MessageResponse
     */
    public static function parse($result)
    {
        $response = new SearchResponse();

        $messages = array();
        foreach ($result as $resultRow)
            $messages[] = MessageEntry::parse($resultRow);

        $response->setMessages($messages);

        return $response;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
}
