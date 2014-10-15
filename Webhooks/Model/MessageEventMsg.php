<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 12/10/2014
 * Time: 21:58
 */

namespace Hamaryuginh\MandrillBundle\Webhooks\Model;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class MessageEventMsg
 * @package Hamaryuginh\MandrillBundle\Webhooks\Model
 */
class MessageEventMsg
{
    /**
     * The unique identifier assigned to each email sent via Mandrill.
     *
     * @var string
     */
    private $_id;

    /**
     * The version
     *
     * @var string
     */
    private $_version;

    /**
     * The integer UTC unix timstamp that the message was sent.
     *
     * @var int
     */
    private $ts;

    /**
     * The recipient's email address
     *
     * @var string
     */
    private $email;

    /**
     * The sender's email address.
     *
     * @var string
     */
    private $sender;

    /**
     * The subject line of the message.
     *
     * @var string
     */
    private $subject;

    /**
     * An array of JSON objects, each of which is an SMTP response received for the message.
     * Each item in the array will contain the following keys:
     * { ts, type, diag, source_ip, destination_ip, size }
     *
     * @var array
     */
    private $smtpEvents;

    /**
     * An array of containing an item for each time the message was opened.
     * Each open includes the following keys:
     * { ts, ip, location, ua }
     *
     * @var array
     */
    private $opens;

    /**
     * An array containing an item for each click recorded for the message.
     * Each item contains the following:
     * { ts, url }
     *
     * @var array
     */
    private $clicks;

    /**
     * An array of the tag names that were applied to the message, if any.
     *
     * @var array
     */
    private $tags;

    /**
     * An array of the metadata key:value pairs that were applied to the message, if any.
     *
     * @var array
     */
    private $metadata;

    /**
     * The state of the message (sent, rejected, spam, unsub, bounced, or soft-bounced)
     *
     * @var string
     */
    private $state;

    /**
     * The subaccount from which the message originated, if no subaccount was used, the value will be null.
     *
     * @var string
     */
    private $subaccount;

    /**
     * For bounced and soft-bounced messages, provides the specific SMTP response code and bounce description,
     * if any, received from the remote server.
     *
     * @var string
     */
    private $diag;

    /**
     * For bounced and soft-bounced messages, a short description of the bounce reason such as bad_mailbox or invalid_domain.
     *
     * @var string
     */
    private $bounceDescription;

    /**
     * The slug of the template used, if any. If no template was used, the value will be null.
     *
     * @var string
     */
    private $template;


    /**
     * @param $result
     * @return MessageEventMsg
     */
    public static function parse($result)
    {
        $msg = new MessageEventMsg();

        $msg->setId(ArrayUtils::getValueAt($result, '_id'));
        $msg->setVersion(ArrayUtils::getValueAt($result, '_version'));
        $msg->setTs(ArrayUtils::getValueAt($result, 'ts'));
        $msg->setEmail(ArrayUtils::getValueAt($result, 'email'));
        $msg->setSender(ArrayUtils::getValueAt($result, 'sender'));
        $msg->setSubject(ArrayUtils::getValueAt($result, 'subject'));
        $msg->setSmtpEvents(ArrayUtils::getValueAt($result, 'smtp_events'));
        $msg->setOpens(ArrayUtils::getValueAt($result, 'opens'));
        $msg->setClicks(ArrayUtils::getValueAt($result, 'clicks'));
        $msg->setTags(ArrayUtils::getValueAt($result, 'tags'));
        $msg->setTs(ArrayUtils::getValueAt($result, 'metadata'));
        $msg->setMetadata(ArrayUtils::getValueAt($result, 'state'));
        $msg->setSubaccount(ArrayUtils::getValueAt($result, 'subaccount'));
        $msg->setDiag(ArrayUtils::getValueAt($result, 'diag'));
        $msg->setBounceDescription(ArrayUtils::getValueAt($result, 'bounce_description'));
        $msg->setTemplate(ArrayUtils::getValueAt($result, 'template'));

        return $msg;
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
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->_version = $version;
    }

    /**
     * @return string
     */
    public function getBounceDescription()
    {
        return $this->bounceDescription;
    }

    /**
     * @param string $bounceDescription
     */
    public function setBounceDescription($bounceDescription)
    {
        $this->bounceDescription = $bounceDescription;
    }

    /**
     * @return array
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param array $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * @return string
     */
    public function getDiag()
    {
        return $this->diag;
    }

    /**
     * @param string $diag
     */
    public function setDiag($diag)
    {
        $this->diag = $diag;
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
     * @return array
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param array $opens
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
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
     * @return array
     */
    public function getSmtpEvents()
    {
        return $this->smtpEvents;
    }

    /**
     * @param array $smtpEvents
     */
    public function setSmtpEvents($smtpEvents)
    {
        $this->smtpEvents = $smtpEvents;
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
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * @param string $subaccount
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;
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