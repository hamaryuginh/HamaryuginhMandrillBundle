<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:14
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class MessageResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 * @method MessageResponse setRecipients(array $recipients)
 * @method array getRecipients()
 */
class MessageResponse extends AbstractMessageResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $recipients = array();
        foreach ($result as $resultRow)
            $recipients[] = new RecipientEntry($resultRow);

        $this->recipients = $recipients;
    }

    /**
     * @param int $index
     * @return RecipientEntry
     */
    public function get($index)
    {
        return $this->recipients[$index];
    }
}
