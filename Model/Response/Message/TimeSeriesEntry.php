<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 14/11/2014
 * Time: 22:23
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

use Hamaryuginh\MandrillBundle\Model\Response\User\AbstractStatEntry;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class TimeSeriesEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 */
class TimeSeriesEntry extends AbstractStatEntry
{
    protected $time;

    /**
     * @param $messageRow
     * @return TimeSeriesEntry
     */
    public static function parse($messageRow)
    {
        $timeSeriesEntry = new TimeSeriesEntry();

        $timeSeriesEntry->setTime(ArrayUtils::getValueAt($messageRow, 'time'));
        $timeSeriesEntry = parent::parse($timeSeriesEntry, $messageRow);

        return $timeSeriesEntry;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}
