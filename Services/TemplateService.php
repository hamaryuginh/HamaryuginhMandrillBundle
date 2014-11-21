<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 19:50
 */

namespace Hamaryuginh\MandrillBundle\Services;
use Hamaryuginh\MandrillBundle\Model\Response\Template\AddResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\DeleteResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\ListResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\PublishResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\RenderResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\TimeSeriesResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Template\UpdateResponse;

/**
 * Class TemplateService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class TemplateService extends AbstractMandrill
{
    /**
     * Add a new template.
     * @param $name
     * @param null $from_email
     * @param null $from_name
     * @param null $subject
     * @param null $code
     * @param null $text
     * @param bool $publish
     * @param array $labels
     * @return AddResponse
     */
    public function add($name, $from_email = null, $from_name = null, $subject = null, $code = null, $text = null, $publish = true, $labels = array())
    {
        return new AddResponse($this->getMandrill()->templates->add($name, $from_email, $from_name, $subject, $code, $text, $publish, $labels));
    }

    /**
     * Get the information for an existing template.
     * @param $name
     * @return InfoResponse
     */
    public function info($name)
    {
        return new InfoResponse($this->getMandrill()->templates->info($name));
    }

    /**
     * Update the code for an existing template. If null is provided for any fields, the values will remain unchanged.
     * @param $name
     * @param null $from_email
     * @param null $from_name
     * @param null $subject
     * @param null $code
     * @param null $text
     * @param bool $publish
     * @param array $labels
     * @return UpdateResponse
     */
    public function update($name, $from_email = null, $from_name = null, $subject = null, $code = null, $text = null, $publish = true, $labels = array())
    {
        return new UpdateResponse($this->getMandrill()->templates->update($name, $from_email, $from_name, $subject, $code, $text, $publish, $labels));
    }

    /**
     * Publish the content for the template. Any new messages sent using this template will start
     * using the content that was previously in draft.
     * @param $name
     * @return PublishResponse
     */
    public function publish($name)
    {
        return new PublishResponse($this->getMandrill()->templates->publish($name));
    }

    /**
     * Delete a template.
     * @param $name
     * @return DeleteResponse
     */
    public function delete($name)
    {
        return new DeleteResponse($this->getMandrill()->templates->delete($name));
    }

    /**
     * Return a list of all the templates available to this user.
     * @param string $label
     * @return ListResponse
     */
    public function getList($label = null)
    {
        return new ListResponse($this->getMandrill()->templates->getList($label));
    }

    /**
     * Return the recent history (hourly stats for the last 30 days) for a template.
     * @param $name
     * @return TimeSeriesResponse
     */
    public function timeSeries($name)
    {
        return new TimeSeriesResponse($this->getMandrill()->templates->timeSeries($name));
    }

    /**
     * Inject content and optionally merge fields into a template, returning the HTML that results.
     * @param string $template_name
     * @param string $template_content
     * @param array|null $merge_vars
     * @return RenderResponse
     */
    public function render($template_name, $template_content, $merge_vars = null)
    {
        return new RenderResponse($this->getMandrill()->templates->render($template_name, $template_content, $merge_vars));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'template';
    }
}
