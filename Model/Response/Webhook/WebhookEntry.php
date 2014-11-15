<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:38
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Webhook;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class WebhookEntry
 * @package Hamaryuginh\MandrillBundle\Model\Webhook
 */
class WebhookEntry
{
    /** @var int $id */
    protected $id;
    /** @var string $url */
    protected $url;
    /** @var string $description */
    protected $description;
    /** @var string $authKey */
    protected $authKey;
    /** @var array $events */
    protected $events;
    /** @var string $createdAt */
    protected $createdAt;
    /** @var string $lastSentAt */
    protected $lastSentAt;
    /** @var int $batchesSent */
    protected $batchesSent;
    /** @var int $eventsSent */
    protected $eventsSent;
    /** @var string $lastError */
    protected $lastError;

    /**
     * @param $webhookRow
     * @return WebhookEntry
     */
    public static function parse($webhookRow)
    {
        $entry = new WebhookEntry();

        $entry->setId(ArrayUtils::getValueAt($webhookRow, 'id'));
        $entry->setUrl(ArrayUtils::getValueAt($webhookRow, 'url'));
        $entry->setDescription(ArrayUtils::getValueAt($webhookRow, 'description'));
        $entry->setAuthKey(ArrayUtils::getValueAt($webhookRow, 'auth_key'));
        $entry->setEvents(ArrayUtils::getValueAt($webhookRow, 'events'));
        $entry->setCreatedAt(ArrayUtils::getValueAt($webhookRow, 'created_at'));
        $entry->setLastSentAt(ArrayUtils::getValueAt($webhookRow, 'last_sent_at'));
        $entry->setBatchesSent(ArrayUtils::getValueAt($webhookRow, 'batches_sent'));
        $entry->setEventsSent(ArrayUtils::getValueAt($webhookRow, 'events_sent'));
        $entry->setLastError(ArrayUtils::getValueAt($webhookRow, 'last_error'));

        return $entry;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @param string $authKey
     */
    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;
    }

    /**
     * @return int
     */
    public function getBatchesSent()
    {
        return $this->batchesSent;
    }

    /**
     * @param int $batchesSent
     */
    public function setBatchesSent($batchesSent)
    {
        $this->batchesSent = $batchesSent;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param array $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return int
     */
    public function getEventsSent()
    {
        return $this->eventsSent;
    }

    /**
     * @param int $eventsSent
     */
    public function setEventsSent($eventsSent)
    {
        $this->eventsSent = $eventsSent;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * @param string $lastError
     */
    public function setLastError($lastError)
    {
        $this->lastError = $lastError;
    }

    /**
     * @return string
     */
    public function getLastSentAt()
    {
        return $this->lastSentAt;
    }

    /**
     * @param string $lastSentAt
     */
    public function setLastSentAt($lastSentAt)
    {
        $this->lastSentAt = $lastSentAt;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}
