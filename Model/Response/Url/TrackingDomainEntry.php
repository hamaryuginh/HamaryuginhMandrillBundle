<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 19:17
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Url;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class TrackingDomainEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Url
 *
 * @method TrackingDomainEntry setTime(string $domain)
 * @method string getTime()
 * @method TrackingDomainEntry setCreatedAt(string $created_at)
 * @method string getCreatedAt()
 * @method TrackingDomainEntry setLastTestedAt(string $last_tested_at)
 * @method string getLastTestedAt()
 * @method TrackingDomainEntry setCname(CnameEntry $cname)
 * @method CnameEntry getCname()
 * @method TrackingDomainEntry setValidTracking(bool $valid_tracking)
 * @method bool getValidTracking()
 */
class TrackingDomainEntry extends AbstractResponse
{
    public function __construct($result)
    {
        parent::__construct($result);

        $this->cname = new CnameEntry($result['cname']);
    }
}
