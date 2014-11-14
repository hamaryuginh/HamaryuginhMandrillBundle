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
        $result   = $this->getMandrill()->users->info();
        $response = InfoResponse::parse($result);

        return $response;
    }

    /**
     * Validate an API key and respond to a ping
     * @return PingResponse
     */
    public function ping()
    {
        $result   = $this->getMandrill()->users->ping();
        $response = PingResponse::parse($result);

        return $response;
    }

    /**
     * Validate an API key and respond to a ping (anal JSON parser version)
     * @return Ping2Response
     */
    public function ping2()
    {
        $result   = $this->getMandrill()->users->ping2();
        $response = Ping2Response::parse($result);

        return $response;
    }

    /**
     * Return the senders that have tried to use this account, both verified and unverified
     * @return array
     */
    public function senders()
    {
        $result   = $this->getMandrill()->users->senders();
        $response = SendersResponse::parse($result);

        return $response;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user';
    }

}