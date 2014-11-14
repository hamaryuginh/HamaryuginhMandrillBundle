<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 22:23
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class TimeSeriesEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 */
class TimeSeriesEntry
{
    protected $time;
    protected $sent;
    protected $hardBounces;
    protected $softBounces;
    protected $rejects;
    protected $complaints;
    protected $unsubs;
    protected $opens;
    protected $uniqueOpens;
    protected $clicks;
    protected $uniqueClicks;

    /**
     * @param $messageRow
     * @return MessageEntry
     */
    public static function parse($messageRow)
    {
        $timeSeriesEntry = new TimeSeriesEntry();

        $timeSeriesEntry->setTime(ArrayUtils::getValueAt($messageRow, 'time'));
        $timeSeriesEntry->setSent(ArrayUtils::getValueAt($messageRow, 'sent'));
        $timeSeriesEntry->setHardBounces(ArrayUtils::getValueAt($messageRow, 'hard_bounces'));
        $timeSeriesEntry->setSoftBounces(ArrayUtils::getValueAt($messageRow, 'soft_bounces'));
        $timeSeriesEntry->setRejects(ArrayUtils::getValueAt($messageRow, 'rejects'));
        $timeSeriesEntry->setComplaints(ArrayUtils::getValueAt($messageRow, 'complaints'));
        $timeSeriesEntry->setUnsubs(ArrayUtils::getValueAt($messageRow, 'unsubs'));
        $timeSeriesEntry->setOpens(ArrayUtils::getValueAt($messageRow, 'opens'));
        $timeSeriesEntry->setUniqueOpens(ArrayUtils::getValueAt($messageRow, 'unique_opens'));
        $timeSeriesEntry->setClicks(ArrayUtils::getValueAt($messageRow, 'clicks'));
        $timeSeriesEntry->setUniqueClicks(ArrayUtils::getValueAt($messageRow, 'unique_clicks'));

        return $timeSeriesEntry;
    }

    /**
     * @return mixed
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param mixed $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * @return mixed
     */
    public function getComplaints()
    {
        return $this->complaints;
    }

    /**
     * @param mixed $complaints
     */
    public function setComplaints($complaints)
    {
        $this->complaints = $complaints;
    }

    /**
     * @return mixed
     */
    public function getHardBounces()
    {
        return $this->hardBounces;
    }

    /**
     * @param mixed $hardBounces
     */
    public function setHardBounces($hardBounces)
    {
        $this->hardBounces = $hardBounces;
    }

    /**
     * @return mixed
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param mixed $opens
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
    }

    /**
     * @return mixed
     */
    public function getRejects()
    {
        return $this->rejects;
    }

    /**
     * @param mixed $rejects
     */
    public function setRejects($rejects)
    {
        $this->rejects = $rejects;
    }

    /**
     * @return mixed
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param mixed $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * @return mixed
     */
    public function getSoftBounces()
    {
        return $this->softBounces;
    }

    /**
     * @param mixed $softBounces
     */
    public function setSoftBounces($softBounces)
    {
        $this->softBounces = $softBounces;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getUniqueClicks()
    {
        return $this->uniqueClicks;
    }

    /**
     * @param mixed $uniqueClicks
     */
    public function setUniqueClicks($uniqueClicks)
    {
        $this->uniqueClicks = $uniqueClicks;
    }

    /**
     * @return mixed
     */
    public function getUniqueOpens()
    {
        return $this->uniqueOpens;
    }

    /**
     * @param mixed $uniqueOpens
     */
    public function setUniqueOpens($uniqueOpens)
    {
        $this->uniqueOpens = $uniqueOpens;
    }

    /**
     * @return mixed
     */
    public function getUnsubs()
    {
        return $this->unsubs;
    }

    /**
     * @param mixed $unsubs
     */
    public function setUnsubs($unsubs)
    {
        $this->unsubs = $unsubs;
    }
}