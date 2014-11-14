<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:59
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

class SenderEntry
{
    /** @var string $address */
    protected $address;
    /** @var string $createdAt */
    protected $createdAt;
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
    /** @var int $clicks */
    protected $clicks;
    /** @var int $uniqueOpens */
    protected $uniqueOpens;
    /** @var int $uniqueClicks */
    protected $uniqueClicks;

    /**
     * @param $senderEntryResult
     * @return SenderEntry
     */
    public static function parse($senderEntryResult)
    {
        $entry = new SenderEntry();

        $entry->setAddress(ArrayUtils::getValueAt($senderEntryResult, 'address'));
        $entry->setCreatedAt(ArrayUtils::getValueAt($senderEntryResult, 'created_at'));
        $entry->setSent(ArrayUtils::getValueAt($senderEntryResult, 'sent'));
        $entry->setHardBounces(ArrayUtils::getValueAt($senderEntryResult, 'hard_bounces'));
        $entry->setSoftBounces(ArrayUtils::getValueAt($senderEntryResult, 'soft_bounces'));
        $entry->setRejects(ArrayUtils::getValueAt($senderEntryResult, 'rejects'));
        $entry->setComplaints(ArrayUtils::getValueAt($senderEntryResult, 'complaints'));
        $entry->setUnsubs(ArrayUtils::getValueAt($senderEntryResult, 'unsubs'));
        $entry->setOpens(ArrayUtils::getValueAt($senderEntryResult, 'opens'));
        $entry->setClicks(ArrayUtils::getValueAt($senderEntryResult, 'clicks'));
        $entry->setUniqueOpens(ArrayUtils::getValueAt($senderEntryResult, 'unique_opens'));
        $entry->setUniqueClicks(ArrayUtils::getValueAt($senderEntryResult, 'unique_clicks'));

        return $entry;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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