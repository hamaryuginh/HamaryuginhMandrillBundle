<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 15/11/2014
 * Time: 15:41
 */

namespace Hamaryuginh\MandrillBundle\Model\Response;
use Hamaryuginh\MandrillBundle\Utils\StringUtils;

/**
 * Class AbstractResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response
 */
abstract class AbstractResponse
{
    /** @var array $data */
    private $data;

    /**
     * Constructor
     * @param $result
     */
    public function __construct($result)
    {
        foreach ($result as $rowKey => $resultRow)
        {
            $property = StringUtils::snakeCaseToCamelCase($rowKey);
            $this->$property = $resultRow;
        }
    }

    /**
     * @param string $name
     * @param $value
     * @return AbstractResponse
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param string $name
     * @throws \Exception
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->data))
            return $this->data[$name];

        throw new \Exception(sprintf('Property "%s" undefined.', $name));
    }

    /**
     * @param string $name
     * @param array $arguments
     * @throws \Exception
     * @return mixed|$this
     */
    public function __call($name, $arguments)
    {
        if (0 === strpos($name, 'get'))
        {
            $property = lcfirst(substr($name, 3));

            return $this->$property;
        }
        elseif (0 === strpos($name, 'set') && count($arguments) > 0)
        {
            $property = lcfirst(substr($name, 3));
            $this->$property = $arguments[0];

            return $this;
        }
        else
            throw new \Exception(sprintf('Function "%s" undefined.', $name));
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}
