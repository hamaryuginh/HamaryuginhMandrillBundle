<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 13:25
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Url;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Url
 *
 * @method ListResponse setUrls(array $urls)
 * @method array getUrls()
 */
class ListResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $urls = array();

        foreach ($result as $resultRow)
            $urls[] = new UrlEntry($resultRow);

        $this->urls = $urls;
    }

    /**
     * @param int $index
     * @return UrlEntry
     */
    public function get($index)
    {
        return $this->urls[$index];
    }
} 