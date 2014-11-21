<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 13:34
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Url;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class TimeSeriesResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Url
 *
 * @method ListResponse setTimeSeries(array $time_series)
 * @method array getTimeSeries()
 */
class TimeSeriesResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $time_series = array();

        foreach ($result as $resultRow)
            $time_series[] = new TimeSeriesEntry($resultRow);

        $this->time_series = $time_series;
    }

    /**
     * @param int $index
     * @return TimeSeriesEntry
     */
    public function get($index)
    {
        return $this->time_series[$index];
    }
}
