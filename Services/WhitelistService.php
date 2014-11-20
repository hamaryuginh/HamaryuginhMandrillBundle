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

/**
 * Class WhitelistService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class WhitelistService extends AbstractMandrill
{
    public function add($email, $comment = null, $subaccount = null)
    {
        return new AddResponse($this->getMandrill()->rejects->add($email, $comment, $subaccount));
    }

    public function getList($email = null, $include_expired = false, $subaccount = null)
    {
        return new ListResponse($this->getMandrill()->rejects->getList($email, $include_expired, $subaccount));
    }

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
