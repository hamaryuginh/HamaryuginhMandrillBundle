<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 15/11/2014
 * Time: 09:54
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class AbstractStatEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 */
abstract class AbstractStatEntry
{
    /** @var int $sent */
    protected $sent;
    /** @var int $hardBounces */
    protected $hardBounces;
    /** @var int $softBounces */
    protected $softBounces;
    /** @var int $rejects */
    protected $rejects;
    /** @var int $complaints */
    protected $complaints;
    /** @var int $unsubs */
    protected $unsubs;
    /** @var int $opens */
    protected $opens;
    /** @var int $uniqueOpens */
    protected $uniqueOpens;
    /** @var int $clicks */
    protected $clicks;
    /** @var int $uniqueClicks */
    protected $uniqueClicks;

    /**
     * @param AbstractStatEntry $entry
     * @param $statEntryResult
     * @return AbstractStatEntry
     */
    public static function parse(AbstractStatEntry $entry, $statEntryResult)
    {
        $parentEntry = clone $entry;

        $parentEntry->setSent(ArrayUtils::getValueAt($statEntryResult, 'sent'));
        $parentEntry->setHardBounces(ArrayUtils::getValueAt($statEntryResult, 'hard_bounces'));
        $parentEntry->setSoftBounces(ArrayUtils::getValueAt($statEntryResult, 'soft_bounces'));
        $parentEntry->setRejects(ArrayUtils::getValueAt($statEntryResult, 'rejects'));
        $parentEntry->setComplaints(ArrayUtils::getValueAt($statEntryResult, 'complaints'));
        $parentEntry->setUnsubs(ArrayUtils::getValueAt($statEntryResult, 'unsubs'));
        $parentEntry->setOpens(ArrayUtils::getValueAt($statEntryResult, 'opens'));
        $parentEntry->setUniqueOpens(ArrayUtils::getValueAt($statEntryResult, 'unique_opens'));
        $parentEntry->setClicks(ArrayUtils::getValueAt($statEntryResult, 'clicks'));
        $parentEntry->setUniqueClicks(ArrayUtils::getValueAt($statEntryResult, 'unique_clicks'));

        return $parentEntry;
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
     * @return int
     */
    public function getComplaints()
    {
        return $this->complaints;
    }

    /**
     * @param int $complaints
     */
    public function setComplaints($complaints)
    {
        $this->complaints = $complaints;
    }

    /**
     * @return int
     */
    public function getHardBounces()
    {
        return $this->hardBounces;
    }

    /**
     * @param int $hardBounces
     */
    public function setHardBounces($hardBounces)
    {
        $this->hardBounces = $hardBounces;
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
     * @return int
     */
    public function getRejects()
    {
        return $this->rejects;
    }

    /**
     * @param int $rejects
     */
    public function setRejects($rejects)
    {
        $this->rejects = $rejects;
    }

    /**
     * @return int
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param int $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * @return int
     */
    public function getSoftBounces()
    {
        return $this->softBounces;
    }

    /**
     * @param int $softBounces
     */
    public function setSoftBounces($softBounces)
    {
        $this->softBounces = $softBounces;
    }

    /**
     * @return int
     */
    public function getUniqueClicks()
    {
        return $this->uniqueClicks;
    }

    /**
     * @param int $uniqueClicks
     */
    public function setUniqueClicks($uniqueClicks)
    {
        $this->uniqueClicks = $uniqueClicks;
    }

    /**
     * @return int
     */
    public function getUniqueOpens()
    {
        return $this->uniqueOpens;
    }

    /**
     * @param int $uniqueOpens
     */
    public function setUniqueOpens($uniqueOpens)
    {
        $this->uniqueOpens = $uniqueOpens;
    }

    /**
     * @return int
     */
    public function getUnsubs()
    {
        return $this->unsubs;
    }

    /**
     * @param int $unsubs
     */
    public function setUnsubs($unsubs)
    {
        $this->unsubs = $unsubs;
    }
}
