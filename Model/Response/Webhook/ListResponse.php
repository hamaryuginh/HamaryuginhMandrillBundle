<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 20:31
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Webhook;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class ListResponse
 * @package Hamaryuginh\MandrillBundle\Model\Response\Webhook
 *
 * @method ListResponse setWebhooks(array $webhooks)
 * @method array getWebhooks()
 */
class ListResponse extends AbstractResponse
{
    /**
     * @param $result
     */
    public function __construct($result)
    {
        $webhooks = array();

        foreach ($result as $resultRow)
            $webhooks[] = new WebhookEntry($resultRow);

        $this->webhooks = $webhooks;
    }

    /**
     * @param int $index
     * @return WebhookEntry
     */
    public function get($index)
    {
        return $this->webhooks[$index];
    }
}
