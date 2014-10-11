<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:49
 */

namespace Hamaryuginh\MandrillBundle\Model\User;

class Ping2Response
{

    /** @var string $response */
    protected $response;

    public static function parse($ping2Result)
    {
        $response = new Ping2Response();

        $response->setResponse($ping2Result['PING']);

        return $response;
    }

    public function hasPong()
    {
        return $this->response == 'PONG!';
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

} 