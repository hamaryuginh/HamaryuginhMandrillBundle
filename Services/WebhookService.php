<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 16:33
 */

namespace Hamaryuginh\MandrillBundle\Services;

use Hamaryuginh\MandrillBundle\Model\Response\Webhook\AddResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Webhook\DeleteResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Webhook\InfoResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Webhook\ListResponse;
use Hamaryuginh\MandrillBundle\Model\Response\Webhook\UpdateResponse;

/**
 * Class WebhookService
 * @package Hamaryuginh\MandrillBundle\Services
 */
class WebhookService extends AbstractMandrill
{
    /**
     * Get the list of all webhooks defined on the account.
     * @return ListResponse
     */
    public function getList()
    {
        return new ListResponse($this->getMandrill()->webhooks->getList());
    }

    /**
     * Add a new webhook.
     * @param $url
     * @param $description
     * @param $events
     * @return AddResponse
     */
    public function add($url, $description = null, $events = null)
    {
        return new AddResponse($this->getMandrill()->webhooks->add($url, $description, $events));
    }

    /**
     * Given the ID of an existing webhook, return the data about it.
     * @param int $id
     * @return InfoResponse
     */
    public function info($id)
    {
        return new InfoResponse($this->getMandrill()->webhooks->info($id));
    }

    /**
     * Update an existing webhook.
     * @param int $id
     * @param string $url
     * @param string $description
     * @param array $events
     * @return UpdateResponse
     */
    public function update($id, $url, $description = null, $events = null)
    {
        return new UpdateResponse($this->getMandrill()->webhooks->update($id, $url, $description, $events));
    }

    /**
     * Delete an existing webhook.
     * @param $id
     * @return DeleteResponse
     */
    public function delete($id)
    {
        return new DeleteResponse($this->getMandrill()->webhooks->delete($id));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webhook';
    }

}
