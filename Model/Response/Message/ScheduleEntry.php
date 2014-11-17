<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 17/11/2014
 * Time: 22:56
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class AbstractScheduleEntry
 * @package Hamaryuginh\MandrillBundle\Model\Common
 *
 * @method ScheduleEntry setId(string $_id)
 * @method string getId()
 * @method ScheduleEntry setCreatedAt(string $created_at)
 * @method string getCreatedAt()
 * @method ScheduleEntry setSendAt(string $send_at)
 * @method string getSendAt()
 * @method ScheduleEntry setFromEmail(string $from_email)
 * @method string getFromEmail()
 * @method ScheduleEntry setTo(string $to)
 * @method string getTo()
 * @method ScheduleEntry setSubject(string $subject)
 * @method string getSubject()
 */
class ScheduleEntry extends AbstractMessageResponse { }
