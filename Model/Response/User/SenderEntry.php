<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:59
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class SenderEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 */
class SenderEntry extends AbstractStatEntry
{
    /** @var string $address */
    protected $address;
    /** @var string $createdAt */
    protected $createdAt;

    /**
     * @param $senderEntryResult
     * @return SenderEntry
     */
    public static function parse($senderEntryResult)
    {
        $entry = new SenderEntry();

        $entry->setAddress(ArrayUtils::getValueAt($senderEntryResult, 'address'));
        $entry->setCreatedAt(ArrayUtils::getValueAt($senderEntryResult, 'created_at'));
        $entry = parent::parse($entry, $senderEntryResult);

        return $entry;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
