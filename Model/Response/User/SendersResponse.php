<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:58
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

/**
 * Class SendersResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 *
 * @method SendersResponse setSenders(array $senders)
 * @method array getSenders()
 */
class SendersResponse extends AbstractUserResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $senders = array();

        foreach ($result as $resultRow)
            $senders[] = new SenderEntry($resultRow);

        $this->senders = $senders;
    }

    /**
     * @param int $index
     * @return SenderEntry
     */
    public function get($index)
    {
        return $this->senders[$index];
    }
}
