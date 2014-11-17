<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 21:56
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class MessageEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 * @method MessageEntry setTs(int $ts)
 * @method int getTs()
 * @method MessageEntry setId(string $_id)
 * @method string getId()
 * @method MessageEntry setSender(string $sender)
 * @method string getSender()
 * @method MessageEntry setTemplate(string $template)
 * @method string getTemplate()
 * @method MessageEntry setSubject(string $subject)
 * @method string getSubject()
 * @method MessageEntry setEmail(string $email)
 * @method string getEmail()
 * @method MessageEntry setTags(array $tags)
 * @method array getTags()
 * @method MessageEntry setOpens(int $opens)
 * @method int getOpens()
 * @method MessageEntry setOpensDetail(array $opens_detail)
 * @method array getOpensDetail()
 * @method MessageEntry setClicks(int $clicks)
 * @method int getClicks()
 * @method MessageEntry setClicksDetail(array $clicks_detail)
 * @method array getClicksDetail()
 * @method MessageEntry setState(string $state)
 * @method string getState()
 * @method MessageEntry setMetadata(array $metadata)
 * @method array getMetadata()
 * @method MessageEntry setSmtpEvents(array $smtp_events)
 * @method array getSmtpEvents()
 */
class MessageEntry extends AbstractMessageResponse { }
