<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:26
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

/**
 * Class InfoResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 * @method InfoResponse setUsername(string $username)
 * @method string getUsername()
 * @method InfoResponse setCreatedAt(string $createdAt)
 * @method string getCreatedAt()
 * @method InfoResponse setPublicId(string $publicId)
 * @method string getPublicId()
 * @method InfoResponse setReputation(int $reputation)
 * @method int getReputation()
 * @method InfoResponse setHourlyQuota(int $hourlyQuota)
 * @method int getHourlyQuota()
 * @method InfoResponse setBacklog(int $backlog)
 * @method int getBacklog()
 * @method InfoResponse setStats(array $stats)
 * @method array getStats()
 */
class InfoResponse extends AbstractUserResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        parent::__construct($result);

        $stats = array();
        foreach ($result['stats'] as $period => $statRow)
            $stats[$period] = new StatEntry($period, $statRow);

        $this->stats = $stats;
    }
}
