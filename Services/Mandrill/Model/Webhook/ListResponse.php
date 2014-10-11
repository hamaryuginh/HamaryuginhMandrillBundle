<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:35
 */

namespace Hamaryuginh\MandrillBundle\Services\Mandrill\Model\Webhook;

class ListResponse
{

    /** @var array $webhooks */
    protected $webhooks;

    /**
     * @param $webhookListResult
     * @return ListResponse
     */
    public static function parse($webhookListResult)
    {
        $response = new ListResponse();

        $webhooks = array();
        foreach ($webhookListResult as $webhookRow)
            $webhooks[] = WebhookEntry::parse($webhookRow);

        $response->setWebhooks($webhooks);

        return $response;
    }

    /**
     * @return array
     */
    public function getWebhooks()
    {
        return $this->webhooks;
    }

    /**
     * @param array $webhooks
     */
    public function setWebhooks($webhooks)
    {
        $this->webhooks = $webhooks;
    }

}