<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 20:09
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Template;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Template
 *
 * @method ListResponse setTemplates(array $templates)
 * @method array getTemplates()
 */
class ListResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $templates = array();

        foreach ($result as $resultRow)
            $templates[] = new TemplateEntry($resultRow);

        $this->templates = $templates;
    }

    /**
     * @param int $index
     * @return TemplateEntry
     */
    public function get($index)
    {
        return $this->templates[$index];
    }
}
