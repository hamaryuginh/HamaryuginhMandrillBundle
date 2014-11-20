<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:22
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Sender;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class DomainsResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Sender
 *
 * @method DomainsResponse setDomains(array $domains)
 * @method array getDomains()
 */
class DomainsResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $domains = array();

        foreach ($result as $resultRow)
            $domains[] = new DomainEntry($resultRow);

        $this->domains = $domains;
    }

    /**
     * @param int $index
     * @return DomainEntry
     */
    public function get($index)
    {
        return $this->domains[$index];
    }
}
