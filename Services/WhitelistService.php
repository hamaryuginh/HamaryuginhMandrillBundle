<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 13:34
 */

namespace Hamaryuginh\MandrillBundle\Services;

use Hamaryuginh\MandrillBundle\Model\Response\Whitelist\AddResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Whitelist\DeleteResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Whitelist\ListResponse;

/**
 * Class WhitelistService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class WhitelistService extends AbstractMandrill
{
    /**
     * Adds an email to your email rejection whitelist. If the address is currently on your blacklist,
     * that blacklist entry will be removed automatically.
     * @param $email
     * @param null $comment
     * @param null $subaccount
     * @return AddResponse
     */
    public function add($email, $comment = null, $subaccount = null)
    {
        return new AddResponse($this->getMandrill()->rejects->add($email, $comment, $subaccount));
    }

    /**
     * Retrieves your email rejection whitelist. You can provide an email address or search prefix to
     * limit the results. Returns up to 1000 results.
     * @param null $email
     * @param bool $include_expired
     * @param null $subaccount
     * @return ListResponse
     */
    public function getList($email = null, $include_expired = false, $subaccount = null)
    {
        return new ListResponse($this->getMandrill()->rejects->getList($email, $include_expired, $subaccount));
    }

    /**
     * Removes an email address from the whitelist.
     * @param $email
     * @param null $subaccount
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
        return 'whitelist';
    }
}
