<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:39
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Sender;

use Hamaryuginh\MandrillBundle\Model\Common\TimeSeriesEntry;
use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class TimeSeriesResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Sender
 *
 * @method TimeSeriesResponse setTimeSeries(array $timeSeries)
 * @method array getTimeSeries()
 */
class TimeSeriesResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $timeSeries = array();

        foreach ($result as $resultRow)
            $timeSeries[] = new TimeSeriesEntry($resultRow);

        $this->timeSeries = $timeSeries;
    }

    /**
     * @param int $index
     * @return TimeSeriesEntry
     */
    public function get($index)
    {
        return $this->timeSeries[$index];
    }
}
