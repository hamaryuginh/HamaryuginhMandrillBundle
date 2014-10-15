<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 12/10/2014
 * Time: 21:48
 */

namespace Hamaryuginh\MandrillBundle\Webhooks\Model;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class MessageEventParam
 * @package Hamaryuginh\MandrillBundle\Webhooks\Model
 */
class MessageEventParam implements WebhookParam
{
    /**
     * The integer utc unix timestamp when the event occurred.
     *
     * @var int
     */
    private $ts;

    /**
     * The name of the event, one of: send, deferral, hard_bounce, soft_bounce, open, click, spam, unsub, reject.
     *
     * @var string
     */
    private $event;

    /**
     * For click events only, the url clicked for the event.
     *
     * @var string
     */
    private $url;

    /**
     * For open and click events only, the ip address where the event originated.
     *
     * @var string
     */
    private $ip;

    /**
     * For open and click events only, the user agent string for the environment (ie, browser or email client) where the open or click occurred.
     *
     * @var string
     */
    private $userAgent;

    /**
     * For open and click events only, the location where the event occurred.
     * Value will be null if no location can be determined from the ip address of the event.
     * Otherwise, an array of key/value pairs with the following keys:
     * { country_short, country_long, region, city, postal_code, timezone, latitude, longitude }
     *
     * @var array
     */
    private $location;

    /**
     * For open and click events only, a parsed version of the user agent detected for the event.
     * Value will be null if user agent can't be determined.
     * Otherwise, an array of key/value pairs with the following keys:
     * { mobile, os_company, os_company_url, os_family, os_icon, os_name, os_url, type, ua_company, ua_company_url, ua_family, ua_icon, ua_name, ua_url, ua_version }
     *
     * @var array
     */
    private $userAgentParsed;

    /**
     * The unqiue identifier of the message that generated the event.
     * This is not an event identifier, but rather a reference to the message id for the email that was sent, opened, clicked, etc.
     *
     * @var string
     */
    private $_id;

    /**
     * Details about the message for which the event occurred.
     * May be empty if the message that generated an open or click is older than 30 days,
     * or when the message was not yet indexed when the event (open, click) occurred.
     *
     * @var MessageEventMsg
     */
    private $msg;


    /**
     * @param $result
     * @return MessageEventParam
     */
    public static function parse($result)
    {
        $messageEventParam = new MessageEventParam();

        $messageEventParam->setTs(ArrayUtils::getValueAt($result, 'ts'));
        $messageEventParam->setEvent(ArrayUtils::getValueAt($result, 'event'));
        $messageEventParam->setUrl(ArrayUtils::getValueAt($result, 'url'));
        $messageEventParam->setIp(ArrayUtils::getValueAt($result, 'ip'));
        $messageEventParam->setUserAgent(ArrayUtils::getValueAt($result, 'user_agent'));
        $messageEventParam->setLocation(ArrayUtils::getValueAt($result, 'location'));
        $messageEventParam->setUserAgentParsed(ArrayUtils::getValueAt($result, 'user_agent_parsed'));
        $messageEventParam->setId(ArrayUtils::getValueAt($result, '_id'));
        $messageEventParam->setMsg(MessageEventMsg::parse(ArrayUtils::getValueAt($result, 'msg')));

        return $messageEventParam;
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
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return array
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param array $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return MessageEventMsg
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param MessageEventMsg $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
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

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return array
     */
    public function getUserAgentParsed()
    {
        return $this->userAgentParsed;
    }

    /**
     * @param array $userAgentParsed
     */
    public function setUserAgentParsed($userAgentParsed)
    {
        $this->userAgentParsed = $userAgentParsed;
    }


    /** @return string */
    public function getEventName()
    {
        return $this->event;
    }
}