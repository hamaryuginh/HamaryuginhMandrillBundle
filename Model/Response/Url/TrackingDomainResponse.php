<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 19:42
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Url;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class TrackingDomainResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Url
 *
 * @method TrackingDomainResponse setTrackingDomains(array $tracking_domains)
 * @method array getTrackingDomains()
 */
class TrackingDomainResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $tracking_domains = array();

        foreach ($result as $resultRow)
            $tracking_domains[] = new TrackingDomainEntry($resultRow);

        $this->tracking_domains = $tracking_domains;
    }

    /**
     * @param int $index
     * @return TrackingDomainEntry
     */
    public function get($index)
    {
        return $this->tracking_domains[$index];
    }
}
