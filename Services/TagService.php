<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 18/11/2014
 * Time: 18:49
 */

namespace Hamaryuginh\MandrillBundle\Services;
use Hamaryuginh\MandrillBundle\Model\Response\Tag\AllTimeSeriesResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Tag\DeleteResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Tag\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Tag\ListResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Tag\TimeSeriesResponse;

/**
 * Class TagService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class TagService extends AbstractMandrill
{
    /**
     * Return all of the user-defined tag information
     * @return ListResponse
     */
    public function getList()
    {
        return new ListResponse($this->getMandrill()->tags->getList());
    }

    /**
     * Deletes a tag permanently. Deleting a tag removes the tag from any messages
     * that have been sent, and also deletes the tag's stats. There is no way to
     * undo this operation, so use it carefully.
     * @param string $tag
     * @return DeleteResponse
     */
    public function delete($tag)
    {
        return new DeleteResponse($this->getMandrill()->tags->delete($tag));
    }

    /**
     * Return more detailed information about a single tag, including aggregates of recent stats
     * @param string $tag
     * @return InfoResponse
     */
    public function info($tag)
    {
        return new InfoResponse($this->getMandrill()->tags->info($tag));
    }

    /**
     * Return the recent history (hourly stats for the last 30 days) for a tag
     * @param string $tag
     * @return TimeSeriesResponse
     */
    public function timeSeries($tag)
    {
        return new TimeSeriesResponse($this->getMandrill()->tags->timeSeries($tag));
    }

    /**
     * Return the recent history (hourly stats for the last 30 days) for all tags
     * @return AllTimeSeriesResponse
     */
    public function allTimeSeries()
    {
        return new AllTimeSeriesResponse($this->getMandrill()->tags->allTimeSeries());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tag';
    }
}