<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:40
 */

namespace Hamaryuginh\MandrillBundle\Model\Common;

/**
 * Class PeriodStatEntry
 * @package Hamaryuginh\MandrillBundle\Model\Common
 *
 * @method PeriodStatEntry setPeriod(string $period)
 * @method string getPeriod()
 */
class PeriodStatEntry extends AbstractStatEntry
{
    /**
     * @param $period
     * @param $result
     */
    public function __construct($period, $result)
    {
        parent::__construct($result);

        $this->period = $period;
    }
}
