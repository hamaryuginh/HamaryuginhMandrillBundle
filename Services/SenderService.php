<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 13:04
 */

namespace Hamaryuginh\MandrillBundle\Services;

use Hamaryuginh\MandrillBundle\Model\Response\Sender\AddDomainResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\CheckDomainResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\DomainsResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\ListResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\TimeSeriesResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Sender\VerifyDomainResponse;

/**
 * Class SenderService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class SenderService extends AbstractMandrill
{
    /**
     * Return the senders that have tried to use this account.
     * @return ListResponse
     */
    public function getList()
    {
        return new ListResponse($this->getMandrill()->senders->getList());
    }

    /**
     * Returns the sender domains that have been added to this account.
     * @return DomainsResponse
     */
    public function domains()
    {
        return new DomainsResponse($this->getMandrill()->senders->domains());
    }

    /**
     * Adds a sender domain to your account. Sender domains are added automatically as you send,
     * but you can use this call to add them ahead of time.
     * @param $domain
     * @return AddDomainResponse
     */
    public function addDomain($domain)
    {
        return new AddDomainResponse($this->getMandrill()->senders->addDomain($domain));
    }

    /**
     * Checks the SPF and DKIM settings for a domain. If you haven't already added this domain
     * to your account, it will be added automatically.
     * @param $domain
     * @return CheckDomainResponse
     */
    public function checkDomain($domain)
    {
        return new CheckDomainResponse($this->getMandrill()->senders->checkDomain($domain));
    }

    /**
     * Sends a verification email in order to verify ownership of a domain. Domain verification is an
     * optional step to confirm ownership of a domain. Once a domain has been verified in a Mandrill
     * account, other accounts may not have their messages signed by that domain unless they also verify
     * the domain. This prevents other Mandrill accounts from sending mail signed by your domain.
     * @param $domain
     * @param $mailbox
     * @return VerifyDomainResponse
     */
    public function verifyDomain($domain, $mailbox)
    {
        return new VerifyDomainResponse($this->getMandrill()->senders->verifyDomain($domain, $mailbox));
    }

    /**
     * Return more detailed information about a single sender, including aggregates of recent stats.
     * @param $address
     * @return InfoResponse
     */
    public function info($address)
    {
        return new InfoResponse($this->getMandrill()->senders->info($address));
    }

    /**
     * Return the recent history (hourly stats for the last 30 days) for a sender.
     * @param $address
     * @return TimeSeriesResponse
     */
    public function timeSeries($address)
    {
        return new TimeSeriesResponse($this->getMandrill()->senders->timeSeries($address));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sender';
    }
}
