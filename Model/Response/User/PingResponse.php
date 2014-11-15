<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 17:49
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\User;

use Hamaryuginh\MandrillBundle\Model\AbstractMandrillResponse;

class PingResponse extends AbstractMandrillResponse
{

    /** @var string $response */
    protected $response;

    public static function parse($pingResult)
    {
        $response = new PingResponse();

        $response->setResponse($pingResult);

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
