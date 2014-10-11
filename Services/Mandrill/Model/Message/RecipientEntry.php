<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:17
 */

namespace Hamaryuginh\MandrillBundle\Services\Mandrill\Model\Message;

class RecipientEntry
{
    /** @var string $email */
    protected $email;
    /** @var string $status */
    protected $status;
    /** @var string $rejectReason */
    protected $rejectReason;
    /** @var string $_id */
    protected $_id;

    /**
     * @param $recipientRow
     * @return RecipientEntry
     */
    public static function parse($recipientRow)
    {
        $recipientEntry = new RecipientEntry();

        $recipientEntry->setEmail($recipientRow['email']);
        $recipientEntry->setStatus($recipientRow['status']);
        $recipientEntry->setRejectReason($recipientRow['reject_reason']);
        $recipientEntry->setId($recipientRow['_id']);

        return $recipientEntry;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * @param string $rejectReason
     */
    public function setRejectReason($rejectReason)
    {
        $this->rejectReason = $rejectReason;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}