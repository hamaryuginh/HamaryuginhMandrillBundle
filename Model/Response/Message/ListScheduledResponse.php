<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 17/11/2014
 * Time: 23:00
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Message;

/**
 * Class ListScheduledResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Message
 *
 * @method ListScheduledResponse setScheduledList(array $scheduledList)
 * @method array getScheduledList()
 */
class ListScheduledResponse extends AbstractMessageResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $scheduledList = array();
        foreach ($result as $resultRow)
            $scheduledList[] = new ScheduleEntry($resultRow);

        $this->scheduledList = $scheduledList;
    }

    /**
     * @param int $index
     * @return ScheduleEntry
     */
    public function get($index)
    {
        return $this->scheduledList[$index];
    }
}
