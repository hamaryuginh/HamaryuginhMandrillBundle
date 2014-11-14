<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 21:12
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Webhook;
use Hamaryuginh\MandrillBundle\Model\AbstractMandrillResponse;
use Hamaryuginh\MandrillBundle\Model\MandrillResponseInterface;

/**
 * Class AbstractWebhookResponse
 * @package Hamaryuginh\MandrillBundle\Model\Webhook
 */
abstract class AbstractWebhookResponse extends AbstractMandrillResponse
{
    /** @var WebhookEntry $webhook */
    protected $webhook;

    /**
     * @param $webhookResult
     * @return MandrillResponseInterface
     */
    public static function parse($webhookResult)
    {
        /** @var AbstractWebhookResponse $response */
        $response = parent::parse($webhookResult);

        $response->setWebhook(WebhookEntry::parse($webhookResult));

        return $response;
    }

    /**
     * @return WebhookEntry
     */
    public function getWebhook()
    {
        return $this->webhook;
    }

    /**
     * @param WebhookEntry $webhook
     */
    public function setWebhook($webhook)
    {
        $this->webhook = $webhook;
    }
}