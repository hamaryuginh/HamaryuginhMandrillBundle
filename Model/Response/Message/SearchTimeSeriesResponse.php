<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 22:20
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

use Hamaryuginh\MandrillBundle\Model\AbstractMandrillResponse;

/**
 * Class SearchTimeSeriesResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 */
class SearchTimeSeriesResponse extends AbstractMandrillResponse
{
    /** @var array $timeSeries */
    protected $timeSeries;

    /**
     * @param $result
     * @return MessageResponse
     */
    public static function parse($result)
    {
        $response = new SearchTimeSeriesResponse();

        $timeSeries = array();
        foreach ($result as $resultRow)
            $timeSeries[] = TimeSeriesEntry::parse($resultRow);

        $response->setTimeSeries($timeSeries);

        return $response;
    }

    /**
     * @return array
     */
    public function getTimeSeries()
    {
        return $this->timeSeries;
    }

    /**
     * @param array $timeSeries
     */
    public function setTimeSeries($timeSeries)
    {
        $this->timeSeries = $timeSeries;
    }
}
