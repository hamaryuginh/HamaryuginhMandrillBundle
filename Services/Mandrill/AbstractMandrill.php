<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 15:07
 */

namespace Hamaryuginh\MandrillBundle\Services\Mandrill;

/**
 * Class AbstractMandrill
 * @package Hamaryuginh\MandrillBundle\Services\Mandrill
 */
abstract class AbstractMandrill implements MandrillServiceInterface
{

    /** @var string $apiKey */
    protected $apiKey;
    /** @var boolean $disableDelivery */
    protected $disableDelivery;
    /** @var string $defaultSender */
    protected $defaultSender;
    /** @var string $defaultSenderName */
    protected $defaultSenderName;
    /** @var string $subaccount */
    protected $subaccount;

    /** @var \Mandrill $mandrill */
    protected $mandrill;

    /**
     * @param $apiKey
     * @param $disableDelivery
     * @param $defaultSender
     * @param $defaultSenderName
     * @param $subaccount
     */
    public function __construct($apiKey, $disableDelivery, $defaultSender, $defaultSenderName, $subaccount)
    {
        $this->apiKey            = $apiKey;
        $this->disableDelivery   = $disableDelivery;
        $this->defaultSender     = $defaultSender;
        $this->defaultSenderName = $defaultSenderName;
        $this->subaccount        = $subaccount;
    }

    /**
     * @return \Mandrill
     */
    protected function getMandrill()
    {
        if (!$this->mandrill)
            $this->mandrill = new \Mandrill($this->apiKey);

        return $this->mandrill;
    }

    /**
     * @return string
     */
    public abstract function getName();
} 