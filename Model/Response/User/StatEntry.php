<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:40
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

/**
 * Class StatEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 */
class StatEntry extends AbstractStatEntry
{
    /** @var string $period */
    protected $period;

    /**
     * @param AbstractStatEntry $statEntryPeriod
     * @param $statEntryResult
     * @return StatEntry
     */
    public static function parse($statEntryPeriod, $statEntryResult)
    {
        $statEntry = new StatEntry();

        $statEntry->setPeriod($statEntryPeriod);
        $statEntry = parent::parse($statEntry, $statEntryResult);

        return $statEntry;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }
}
