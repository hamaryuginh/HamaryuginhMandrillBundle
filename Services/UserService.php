<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 15:06
 */

namespace Hamaryuginh\MandrillBundle\Services;

use Hamaryuginh\MandrillBundle\Model\Response\User\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\User\PingResponse;
use Hamaryuginh\MandrillBundle\Model\Response\User\Ping2Response;
use Hamaryuginh\MandrillBundle\Model\Response\User\SendersResponse;

class UserService extends AbstractMandrill
{

    /**
     * Return the information about the API-connected user
     * @return InfoResponse
     */
    public function info()
    {
        return new InfoResponse($this->getMandrill()->users->info());
    }

    /**
     * Validate an API key and respond to a ping
     * @return PingResponse
     */
    public function ping()
    {
        return new PingResponse($this->getMandrill()->users->ping());
    }

    /**
     * Validate an API key and respond to a ping (anal JSON parser version)
     * @return Ping2Response
     */
    public function ping2()
    {
        return new Ping2Response($this->getMandrill()->users->ping2());
    }

    /**
     * Return the senders that have tried to use this account, both verified and unverified
     * @return SendersResponse
     */
    public function senders()
    {
        return new SendersResponse($this->getMandrill()->users->senders());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user';
    }

}
