<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:40
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

use Hamaryuginh\MandrillBundle\Model\Common\AbstractStatEntry;

/**
 * Class StatEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 * @method StatEntry setPeriod(string $period)
 * @method string getPeriod()
 */
class StatEntry extends AbstractStatEntry
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
