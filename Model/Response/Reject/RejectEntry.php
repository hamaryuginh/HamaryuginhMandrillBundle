<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 19:04
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Reject;

use Hamaryuginh\MandrillBundle\Model\Common\SenderEntry;

/**
 * Class RejectEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Reject
 *
 * @method RejectEntry setEmail(string $email)
 * @method string getEmail()
 * @method RejectEntry setReason(string $reason)
 * @method string getReason()
 * @method RejectEntry setDetail(string $detail)
 * @method string getDetail()
 * @method RejectEntry setCreatedAt(string $created_at)
 * @method string getCreatedAt()
 * @method RejectEntry setLastEventAt(string $last_event_at)
 * @method string getLastEventAt()
 * @method RejectEntry setExpiresAt(string $expires_at)
 * @method string getExpiresAt()
 * @method RejectEntry setExpired(boolean $expired)
 * @method boolean getExpired()
 * @method RejectEntry setSubaccount(string $subaccount)
 * @method boolean getSubaccount()
 * @method RejectEntry setSender(SenderEntry $sender)
 * @method SenderEntry getSender()
 */
class RejectEntry extends AbstractRejectResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        parent::__construct($result);

        $this->sender = (is_null($result['sender']) ? null : new SenderEntry($result['sender']));
    }
}
