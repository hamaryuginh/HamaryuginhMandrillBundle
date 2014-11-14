<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 21:56
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class MessageEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 */
class MessageEntry
{
    /** @var int $ts */
    protected $ts;
    /** @var string $_id */
    protected $_id;
    /** @var string $sender */
    protected $sender;
    /** @var string $template */
    protected $template;
    /** @var string $subject */
    protected $subject;
    /** @var string $email */
    protected $email;
    /** @var array $tags */
    protected $tags;
    /** @var int $opens */
    protected $opens;
    /** @var array $opens_detail */
    protected $opens_detail;
    /** @var int $clicks */
    protected $clicks;
    /** @var array $clicks_detail */
    protected $clicks_detail;
    /** @var string $state */
    protected $state;
    /** @var array $metadata */
    protected $metadata;

    /**
     * @param $messageRow
     * @return MessageEntry
     */
    public static function parse($messageRow)
    {
        $messageEntry = new MessageEntry();

        $messageEntry->setTs(ArrayUtils::getValueAt($messageRow, 'ts'));
        $messageEntry->setId(ArrayUtils::getValueAt($messageRow, '_id'));
        $messageEntry->setSender(ArrayUtils::getValueAt($messageRow, 'sender'));
        $messageEntry->setTemplate(ArrayUtils::getValueAt($messageRow, 'template'));
        $messageEntry->setSubject(ArrayUtils::getValueAt($messageRow, 'subject'));
        $messageEntry->setEmail(ArrayUtils::getValueAt($messageRow, 'email'));
        $messageEntry->setTags(ArrayUtils::getValueAt($messageRow, 'tags'));
        $messageEntry->setOpens(ArrayUtils::getValueAt($messageRow, 'opens'));
        $messageEntry->setOpensDetail(ArrayUtils::getValueAt($messageRow, 'opens_detail'));
        $messageEntry->setClicks(ArrayUtils::getValueAt($messageRow, 'clicks'));
        $messageEntry->setClicksDetail(ArrayUtils::getValueAt($messageRow, 'click_detail'));
        $messageEntry->setState(ArrayUtils::getValueAt($messageRow, 'state'));
        $messageEntry->setMetadata(ArrayUtils::getValueAt($messageRow, 'metadata'));

        return $messageEntry;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param int $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * @return array
     */
    public function getClicksDetail()
    {
        return $this->clicks_detail;
    }

    /**
     * @param array $clicks_detail
     */
    public function setClicksDetail($clicks_detail)
    {
        $this->clicks_detail = $clicks_detail;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return int
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param int $opens
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
    }

    /**
     * @return array
     */
    public function getOpensDetail()
    {
        return $this->opens_detail;
    }

    /**
     * @param array $opens_detail
     */
    public function setOpensDetail($opens_detail)
    {
        $this->opens_detail = $opens_detail;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }
} 