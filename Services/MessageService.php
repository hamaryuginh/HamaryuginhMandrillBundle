<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 15:08
 */

namespace Hamaryuginh\MandrillBundle\Services;

use Hamaryuginh\MandrillBundle\Model\Request\Message\Message;
use Hamaryuginh\MandrillBundle\Model\Response\Message\CancelScheduledResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\ContentResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\ListScheduledResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\MessageResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\ParseResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\RescheduleResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\SearchResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Message\SearchTimeSeriesResponse;

class MessageService extends AbstractMandrill
{

    /**
     * Send a new transactional message through Mandrill
     * @param Message $message
     * @param boolean $async
     * @param string $ipPool
     * @param string $sendAt
     * @return MessageResponse|false
     */
    public function send(Message $message, $async = false, $ipPool = null, $sendAt = null)
    {
        if ($this->disableDelivery)
            return false;

        $this->checkDefaultMessageOptions($message);

        return new MessageResponse($this->getMandrill()->messages->send($message->toArray(), $async, $ipPool, $sendAt));
    }

    /**
     * Send a new transactional message through Mandrill using a template.
     * @param string $templateName
     * @param array $templateContent
     * @param Message $message
     * @param boolean $async
     * @param string $ipPool
     * @param string $sendAt
     * @return MessageResponse|false
     */
    public function sendTemplate($templateName, $templateContent, Message $message, $async = false, $ipPool = null, $sendAt = null)
    {
        if ($this->disableDelivery)
            return false;

        $this->checkDefaultMessageOptions($message);

        return new MessageResponse($this->getMandrill()->messages->sendTemplate($templateName, $templateContent, $message->toArray(), $async, $ipPool, $sendAt));
    }

    /**
     * Search recently sent messages and optionally narrow by date range, tags, senders, and API keys.
     * If no date range is specified, results within the last 7 days are returned.
     * This method may be called up to 20 times per minute. If you need the data more often,
     * you can use /messages/info.json to get the information for a single message,
     * or webhooks to push activity to your own application for querying.
     * @param $query
     * @param $dateFrom
     * @param $dateTo
     * @param $tags
     * @param $senders
     * @param $apiKeys
     * @param $limit
     * @return SearchResponse
     */
    public function search($query = '*', $dateFrom = null, $dateTo = null, $tags = null, $senders = null, $apiKeys = null, $limit = 100)
    {
        return new SearchResponse($this->getMandrill()->messages->search($query, $dateFrom, $dateTo, $tags, $senders, $apiKeys, $limit));
    }

    /**
     * Search the content of recently sent messages and return the aggregated hourly stats for matching messages
     * @param $query
     * @param $dateFrom
     * @param $dateTo
     * @param $tags
     * @param $senders
     * @return SearchTimeSeriesResponse
     */
    public function searchTimeSeries($query = '*', $dateFrom = null, $dateTo = null, $tags = null, $senders = null)
    {
        return new SearchTimeSeriesResponse($this->getMandrill()->messages->searchTimeSeries($query, $dateFrom, $dateTo, $tags, $senders));
    }

    /**
     * Get the information for a single recently sent message
     * @param string $id
     * @return InfoResponse
     */
    public function info($id)
    {
        return new InfoResponse($this->getMandrill()->messages->info($id));
    }

    /**
     * Get the full content of a recently sent message
     * @param string $id
     * @return ContentResponse
     */
    public function content($id)
    {
        return new ContentResponse($this->getMandrill()->messages->content($id));
    }

    /**
     * Parse the full MIME document for an email message, returning the content of the message broken into its constituent pieces
     * @param string $rawMessage
     * @return ParseResponse
     */
    public function parse($rawMessage)
    {
        return new ParseResponse($this->getMandrill()->messages->parse($rawMessage));
    }

    /**
     * Take a raw MIME document for a message, and send it exactly as if it were sent through Mandrill's SMTP servers
     * @param $rawMessage
     * @param $fromEmail
     * @param $fromName
     * @param $to
     * @param $async
     * @param $ipPool
     * @param $sendAt
     * @param $returnPathDomain
     * @return array|false
     */
    public function sendRaw($rawMessage, $fromEmail = null, $fromName = null, $to = null, $async = false, $ipPool = null, $sendAt = null, $returnPathDomain = null)
    {
        if ($this->disableDelivery)
            return false;

        return new MessageResponse($this->getMandrill()->messages->sendRaw($rawMessage, $fromEmail, $fromName, $to, $async, $ipPool, $sendAt, $returnPathDomain));
    }

    /**
     * Queries your scheduled emails by sender or recipient, or both.
     * @param $to
     * @return array
     */
    public function listScheduled($to)
    {
        return new ListScheduledResponse($this->getMandrill()->messages->listScheduled($to));
    }

    /**
     * Cancels a scheduled email.
     * @param $id
     * @return \struct
     */
    public function cancelScheduled($id)
    {
        return new CancelScheduledResponse($this->getMandrill()->messages->cancelScheduled($id));
    }

    /**
     * Reschedules a scheduled email.
     * @param $id
     * @param $sendAt
     * @return \struct
     */
    public function reschedule($id, $sendAt)
    {
        return new RescheduleResponse($this->getMandrill()->messages->reschedule($id, $sendAt));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'message';
    }

    private function checkDefaultMessageOptions(Message $message)
    {
        if (strlen($message->getFromEmail()) == 0)
        {
            $message->setFromEmail($this->defaultSender);
            $message->setFromName($this->defaultSenderName);
        }

        if (strlen($message->getSubaccount()) == 0 && null !== $this->subaccount)
        {
            $message->setSubaccount($this->subaccount);
        }
    }

}
