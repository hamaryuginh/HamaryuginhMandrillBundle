<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:58
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

use Hamaryuginh\MandrillBundle\Model\AbstractMandrillResponse;

class SendersResponse extends AbstractMandrillResponse
{

    /** @var array $senders */
    protected $senders;

    /**
     * @param $sendersResult
     * @return SendersResponse
     */
    public static function parse($sendersResult)
    {
        $response = new SendersResponse();

        $senders = array();
        foreach ($sendersResult as $senderEntryResult)
            $senders[] = SenderEntry::parse($senderEntryResult);

        $response->setSenders($senders);

        return $response;
    }

    /**
     * @return mixed
     */
    public function getSenders()
    {
        return $this->senders;
    }

    /**
     * @param mixed $senders
     */
    public function setSenders($senders)
    {
        $this->senders = $senders;
    }


} 