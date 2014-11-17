<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:49
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class Ping2Response
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 * @method Ping2Response setResponse(string $response)
 * @method string getResponse()
 */
class Ping2Response extends AbstractUserResponse
{
    public function __construct($result)
    {
        $this->response = ArrayUtils::getValueAt($result, 'PING');
    }

    public function hasPong()
    {
        return $this->response == 'PONG!';
    }
}
