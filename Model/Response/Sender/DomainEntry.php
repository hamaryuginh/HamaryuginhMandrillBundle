<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:17
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Sender;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class DomainEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\Sender
 *
 * @method DomainEntry setDomain(string $domain)
 * @method string getDomain()
 * @method DomainEntry setCreatedAt(string $created_at)
 * @method string getCreatedAt()
 * @method DomainEntry setLastTestedAt(string $last_tested_at)
 * @method string getLastTestedAt()
 * @method DomainEntry setSpf(SpfEntry $spf)
 * @method SpfEntry getSpf()
 * @method DomainEntry setDkim(DkimEntry $dkim)
 * @method DkimEntry getDkim()
 * @method DomainEntry setVerifiedAt(string $verified_at)
 * @method string getVerifiedAt()
 * @method DomainEntry setValidSigning(bool $valid_signing)
 * @method bool getValidSigning()
 */
class DomainEntry extends AbstractResponse
{
    public function __construct($result)
    {
        parent::__construct($result);

        $this->spf = new SpfEntry($result['spf']);
        $this->dkim = new DkimEntry($result['dkim']);
    }
}
