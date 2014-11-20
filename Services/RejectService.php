<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 13:34
 */

namespace Hamaryuginh\MandrillBundle\Services;
use Hamaryuginh\MandrillBundle\Model\Response\Reject\AddResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Reject\DeleteResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Reject\ListResponse;

/**
 * Class RejectService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class RejectService extends AbstractMandrill
{
    /**
     * Adds an email to your email rejection blacklist. Addresses that you add manually will
     * never expire and there is no reputation penalty for removing them from your blacklist.
     * Attempting to blacklist an address that has been whitelisted will have no effect.
     * @param string $email
     * @param string $comment
     * @param string $subaccount
     * @return AddResponse
     */
    public function add($email, $comment = null, $subaccount = null)
    {
        return new AddResponse($this->getMandrill()->rejects->add($email, $comment, $subaccount));
    }

    /**
     * Retrieves your email rejection blacklist. You can provide an email address to limit the results.
     * Returns up to 1000 results. By default, entries that have expired are excluded from the results;
     * set include_expired to true to include them.
     * @param string $email
     * @param bool $include_expired
     * @param string $subaccount
     * @return ListResponse
     */
    public function getList($email = null, $include_expired = false, $subaccount = null)
    {
        return new ListResponse($this->getMandrill()->rejects->getList($email, $include_expired, $subaccount));
    }

    /**
     * Deletes an email rejection. There is no limit to how many rejections you can remove from your blacklist,
     * but keep in mind that each deletion has an affect on your reputation.
     * @param string $email
     * @param string $subaccount
     * @return DeleteResponse
     */
    public function delete($email, $subaccount = null)
    {
        return new DeleteResponse($this->getMandrill()->rejects->delete($email, $subaccount));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'reject';
    }
}
