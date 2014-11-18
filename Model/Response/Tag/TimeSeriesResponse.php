<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 18/11/2014
 * Time: 18:51
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Tag;

/**
 * Class TimeSeriesResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Tag
 *
 * @method TimeSeriesResponse setSeries(array $series)
 * @method array getSeries()
 */
class TimeSeriesResponse extends AbstractTagResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $series = array();

        foreach ($result as $resultRow)
            $series[] = new TagTimeStatEntry($resultRow);

        $this->series = $series;
    }

    /**
     * @param int $index
     * @return TagTimeStatEntry
     */
    public function get($index)
    {
        return $this->series[$index];
    }
}
