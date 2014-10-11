<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 16:33
 */

namespace Hamaryuginh\MandrillBundle\Services;

class WebhookService extends AbstractMandrill
{

    /**
     * Get the list of all webhooks defined on the account.
     * @return array
     */
    public function getList()
    {
        return $this->getMandrill()->webhooks->getList();
    }

    /**
     * Add a new webhook.
     * @param $url
     * @param $description
     * @param $events
     * @return \struct
     */
    public function add($url, $description, $events)
    {
        return $this->getMandrill()->webhooks->add($url, $description, $events);
    }

    /**
     * Given the ID of an existing webhook, return the data about it.
     * @param $id
     * @return \struct
     */
    public function info($id)
    {
        return $this->getMandrill()->webhooks->info($id);
    }

    /**
     * Update an existing webhook.
     * @param $id
     * @param $url
     * @param $description
     * @param $events
     * @return \struct
     */
    public function update($id, $url, $description, $events)
    {
        return $this->getMandrill()->webhooks->update($id, $url, $description, $events);
    }

    /**
     * Delete an existing webhook.
     * @param $id
     * @return \struct
     */
    public function delete($id)
    {
        return $this->getMandrill()->webhooks->delete($id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webhook';
    }

}