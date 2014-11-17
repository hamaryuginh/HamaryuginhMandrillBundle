<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 21:41
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class SearchResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 * @method SearchResponse setMessages(array $messages)
 * @method array getMessages()
 */
class SearchResponse extends AbstractMessageResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $messages = array();

        foreach ($result as $resultRow)
            $messages[] = new MessageEntry($resultRow);

        $this->messages = $messages;
    }

    /**
     * @param int $index
     * @return MessageEntry
     */
    public function get($index)
    {
        return $this->messages[$index];
    }
}
