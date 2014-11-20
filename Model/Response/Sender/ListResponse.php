<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:07
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Sender;

use Hamaryuginh\MandrillBundle\Model\Common\SenderEntry;
use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Sender
 *
 * @method ListResponse setSenders(array $senders)
 * @method array getSenders()
 */
class ListResponse extends AbstractResponse
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
