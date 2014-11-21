<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 13:23
 */

namespace Hamaryuginh\MandrillBundle\Services;
use Hamaryuginh\MandrillBundle\Model\Response\Url\AddTrackingDomainResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Url\CheckTrackingDomainResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Url\ListResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Url\TimeSeriesResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Url\TrackingDomainResponse;

/**
 * Class UrlService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class UrlService extends AbstractMandrill
{
    /**
     * Get the 100 most clicked URLs.
     * @return ListResponse
     */
    public function getList()
    {
        return new ListResponse($this->getMandrill()->urls->getList());
    }

    /**
     * Return the 100 most clicked URLs that match the search query given.
     * @param $q
     * @return ListResponse
     */
    public function search($q)
    {
        return new ListResponse($this->getMandrill()->urls->search($q));
    }

    /**
     * Return the recent history (hourly stats for the last 30 days) for a url.
     * @param $url
     * @return TimeSeriesResponse
     */
    public function timeSeries($url)
    {
        return new TimeSeriesResponse($this->getMandrill()->urls->timeSeries($url));
    }

    /**
     * Get the list of tracking domains set up for this account.
     * @return TrackingDomainResponse
     */
    public function trackingDomains()
    {
        return new TrackingDomainResponse($this->getMandrill()->urls->trackingDomains());
    }

    /**
     * Add a tracking domain to your account.
     * @param $domain
     * @return AddTrackingDomainResponse
     */
    public function addTrackingDomain($domain)
    {
        return new AddTrackingDomainResponse($this->getMandrill()->urls->addTrackingDomain($domain));
    }

    /**
     * Checks the CNAME settings for a tracking domain. The domain must have been added
     * already with the add-tracking-domain call.
     * @param $domain
     * @return CheckTrackingDomainResponse
     */
    public function checkTrackingDomain($domain)
    {
        return new CheckTrackingDomainResponse($this->getMandrill()->urls->checkTrackingDomain($domain));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'url';
    }
}
