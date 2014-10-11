<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:14
 */

namespace Hamaryuginh\MandrillBundle\Model\Message;

class MessageResponse
{
    /** @var array $recipients */
    protected $recipients;

    /**
     * @param $messageResult
     * @return MessageResponse
     */
    public static function parse($messageResult)
    {
        $response = new MessageResponse();

        $recipients = array();
        foreach ($messageResult as $recipientRow)
            $recipients[] = RecipientEntry::parse($recipientRow);

        $response->setRecipients($recipients);

        return $response;
    }

    /**
     * @return array
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param array $recipients
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
    }


} 