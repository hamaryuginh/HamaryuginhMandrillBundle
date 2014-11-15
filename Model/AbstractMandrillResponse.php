<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 21:21
 */

namespace Hamaryuginh\MandrillBundle\Model;

/**
 * Class AbstractMandrillResponse
 * @package Hamaryuginh\MandrillBundle\Model
 */
abstract class AbstractMandrillResponse implements MandrillResponseInterface
{
    /**
     * This function need to be override
     * @param $result
     * @return MandrillResponseInterface
     */
    public static function parse($result)
    {
        return new static();
    }
}
