<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:26
 */

namespace Hamaryuginh\MandrillBundle\Services\Mandrill\Model\User;

class InfoResponse
{
    /** @var string $username */
    protected $username;
    /** @var string $createdAt */
    protected $createdAt;
    /** @var string $publicId */
    protected $publicId;
    /** @var int $reputation */
    protected $reputation;
    /** @var int $hourlyQuota */
    protected $hourlyQuota;
    /** @var int $backlog */
    protected $backlog;
    /** @var array $stats */
    protected $stats;

    /**
     * @param $infoResult
     * @return InfoResponse
     */
    public static function parse($infoResult)
    {
        $response = new InfoResponse();

        $response->setUsername($infoResult['username']);
        $response->setCreatedAt($infoResult['created_at']);
        $response->setPublicId($infoResult['public_id']);
        $response->setReputation($infoResult['reputation']);
        $response->setHourlyQuota($infoResult['hourly_quota']);
        $response->setBacklog($infoResult['backlog']);
        $stats = array();
        foreach ($infoResult['stats'] as $statEntryPeriod => $statEntryData)
            $stats[$statEntryPeriod] = StatEntry::parse($statEntryPeriod, $statEntryData);
        $response->setStats($stats);

        return $response;
    }

    /**
     * @return int
     */
    public function getBacklog()
    {
        return $this->backlog;
    }

    /**
     * @param int $backlog
     */
    public function setBacklog($backlog)
    {
        $this->backlog = $backlog;
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
    public function getHourlyQuota()
    {
        return $this->hourlyQuota;
    }

    /**
     * @param int $hourlyQuota
     */
    public function setHourlyQuota($hourlyQuota)
    {
        $this->hourlyQuota = $hourlyQuota;
    }

    /**
     * @return string
     */
    public function getPublicId()
    {
        return $this->publicId;
    }

    /**
     * @param string $publicId
     */
    public function setPublicId($publicId)
    {
        $this->publicId = $publicId;
    }

    /**
     * @return int
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * @param int $reputation
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    }

    /**
     * @return array
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param array $stats
     */
    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

}