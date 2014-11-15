<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 21:17
 */

namespace Hamaryuginh\MandrillBundle\Model;

/**
 * Interface MandrillResponseInterface
 * @package Hamaryuginh\MandrillBundle\Model
 */
interface MandrillResponseInterface
{
    /**
     * @param $result
     * @return MandrillResponseInterface
     */
    public static function parse($result);
}
