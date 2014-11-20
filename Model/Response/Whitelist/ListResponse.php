<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 20/11/2014
 * Time: 12:38
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Whitelist;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Whitelist
 *
 * @method ListResponse setWhitelists(array $whitelists)
 * @method array getWhitelists()
 */
class ListResponse extends AbstractWhitelistResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $whitelists = array();

        foreach ($result as $resultRow)
            $whitelists[] = new WhitelistEntry($resultRow);

        $this->whitelists = $whitelists;
    }

    /**
     * @param int $index
     * @return WhitelistEntry
     */
    public function get($index)
    {
        return $this->whitelists[$index];
    }
}
