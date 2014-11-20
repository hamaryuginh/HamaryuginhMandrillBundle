<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 18:27
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Reject;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Reject
 *
 * @method ListResponse setRejects(array $rejects)
 * @method array getRejects()
 */
class ListResponse extends AbstractRejectResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $rejects = array();

        foreach ($result as $resultRow)
            $rejects[] = new RejectEntry($resultRow);

        $this->rejects = $rejects;
    }

    /**
     * @param int $index
     * @return RejectEntry
     */
    public function get($index)
    {
        return $this->rejects[$index];
    }
}
