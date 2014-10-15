<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 12/10/2014
 * Time: 21:37
 */

namespace Hamaryuginh\MandrillBundle\Webhooks;

use Hamaryuginh\MandrillBundle\Webhooks\Model\InboundMessageEventParam;
use Hamaryuginh\MandrillBundle\Webhooks\Model\MessageEventParam;
use Hamaryuginh\MandrillBundle\Webhooks\Model\SyncEventParam;

/**
 * Class WebhookService
 * @package Hamaryuginh\MandrillBundle\Webhooks
 */
class WebhookService
{
    /**
     * @param array $webhooks - data sended by mandrill (after json_decode to array)
     * @return array
     */
    public function parseWebhooks($webhookList)
    {
        $webhooks = array();

        foreach ($webhookList as $webhookData)
        {
            $name = '';
            if (array_key_exists('event', $webhookData))
                $name = $webhookData['event'];
            elseif (array_key_exists('type', $webhookData))
                $name = $webhookData['type'];
            switch ($name)
            {
                case 'send':
                case 'deferral':
                case 'hard_bounce':
                case 'soft_bounce':
                case 'open':
                case 'click':
                case 'spam':
                case 'unsub':
                case 'reject':
                    $webhooks[] = MessageEventParam::parse($webhookData);
                    break;
                case 'whitelist':
                case 'blacklist':
                    $webhooks[] = SyncEventParam::parse($webhookData);
                    break;
                case 'inbound':
                    $webhooks[] = InboundMessageEventParam::parse($webhookData);
                    break;
            }
        }

        return $webhooks;
    }
} 