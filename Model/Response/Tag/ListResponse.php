<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 18/11/2014
 * Time: 18:51
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Tag;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Tag
 *
 * @method ListResponse setTags(array $tags)
 * @method array getTags()
 */
class ListResponse extends AbstractTagResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $tags = array();

        foreach ($result as $resultRow)
            $tags[] = new TagStatEntry($resultRow);

        $this->tags = $tags;
    }

    /**
     * @param int $index
     * @return TagStatEntry
     */
    public function get($index)
    {
        return $this->tags[$index];
    }
}
