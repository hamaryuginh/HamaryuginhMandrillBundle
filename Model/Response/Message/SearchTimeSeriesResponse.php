<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 22:20
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class SearchTimeSeriesResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 * @method SearchTimeSeriesResponse setTimeSeries(array $timeSeries)
 * @method array getTimeSeries()
 */
class SearchTimeSeriesResponse extends AbstractMessageResponse
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
