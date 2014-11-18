<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 18/11/2014
 * Time: 18:51
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Tag;

use Hamaryuginh\MandrillBundle\Model\Common\AbstractStatEntry;
use Hamaryuginh\MandrillBundle\Model\Common\PeriodStatEntry;

/**
 * Class InfoResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Tag
 *
 * @method TagStatEntry setTag(string $tag)
 * @method string getTag()
 * @method InfoResponse setStats(array $stats)
 * @method array getStats()
 */
class InfoResponse extends AbstractStatEntry
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        parent::__construct($result);

        $stats = array();
        foreach ($result['stats'] as $period => $statRow)
            $stats[$period] = new PeriodStatEntry($period, $statRow);

        $this->stats = $stats;
    }
}
