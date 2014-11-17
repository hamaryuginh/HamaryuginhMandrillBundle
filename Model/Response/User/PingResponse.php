<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:49
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

/**
 * Class InfoResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 * @method PingResponse setResponse(string $response)
 * @method string getResponse()
 */
class PingResponse extends AbstractUserResponse
{
    public function __construct($result)
    {
        $this->response = $result;
    }

    public function hasPong()
    {
        return $this->response == 'PONG!';
    }
}
