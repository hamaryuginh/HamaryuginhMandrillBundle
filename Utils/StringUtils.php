<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 15/11/2014
 * Time: 16:00
 */

namespace Hamaryuginh\MandrillBundle\Utils;

/**
 * Class StringUtils
 * @package Hamaryuginh\MandrillBundle\Utils
 */
class StringUtils
{
    /**
     * Take a string_like_this and return a StringLikeThis
     *
     * @param string
     * @return string
     */
    public static function snakeCaseToPascalCase($val)
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $val)));
    }

    /**
     * Take a string_like_this and return a stringLikeThis
     *
     * @param string
     * @return string
     */
    public static function snakeCaseToCamelCase($val)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $val))));
    }
}
