<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 21:38
 */

namespace Hamaryuginh\MandrillBundle\Utils;

/**
 * Class ArrayUtils
 * @package Hamaryuginh\MandrillBundle\Utils
 */
class ArrayUtils
{
    /**
     * @param $array
     * @param $key
     * @return mixed|null
     */
    public static function getValueAt($array, $key)
    {
        if (array_key_exists($key, $array))
            return $array[$key];

        return null;
    }
} 