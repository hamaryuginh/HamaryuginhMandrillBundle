<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:33
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Sender;

use Hamaryuginh\MandrillBundle\Model\Common\PeriodStatEntry;
use Hamaryuginh\MandrillBundle\Model\Common\SenderEntry;

/**
 * Class InfoResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Sender
 *
 * @method InfoResponse setStats(array $stats)
 * @method array getStats()
 */
class InfoResponse extends SenderEntry
{
    public function __construct($result)
    {
        parent::__construct($result);

        $stats = array();
        foreach ($result['stats'] as $period => $statRow)
            $stats[$period] = new PeriodStatEntry($period, $statRow);

        $this->stats = $stats;
    }
}
