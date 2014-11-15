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

class WebhookService extends AbstractMandrill
{

    /**
     * Get the list of all webhooks defined on the account.
     * @return ListResponse
     */
    public function getList()
    {
        $result   = $this->getMandrill()->webhooks->getList();
        $response = ListResponse::parse($result);

        return $response;
    }

    /**
     * Add a new webhook.
     * @param $url
     * @param $description
     * @param $events
     * @return AddResponse
     */
    public function add($url, $description, $events)
    {
        $result   = $this->getMandrill()->webhooks->add($url, $description, $events);
        $response = AddResponse::parse($result);

        return $response;
    }

    /**
     * Given the ID of an existing webhook, return the data about it.
     * @param $id
     * @return InfoResponse
     */
    public function info($id)
    {
        $result   = $this->getMandrill()->webhooks->info($id);
        $response = InfoResponse::parse($result);

        return $response;
    }

    /**
     * Update an existing webhook.
     * @param $id
     * @param $url
     * @param $description
     * @param $events
     * @return UpdateResponse
     */
    public function update($id, $url, $description, $events)
    {
        $result   = $this->getMandrill()->webhooks->update($id, $url, $description, $events);
        $response = UpdateResponse::parse($result);

        return $response;
    }

    /**
     * Delete an existing webhook.
     * @param $id
     * @return DeleteResponse
     */
    public function delete($id)
    {
        $result   = $this->getMandrill()->webhooks->delete($id);
        $response = DeleteResponse::parse($result);

        return $response;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webhook';
    }

}
