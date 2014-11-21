<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 18:38
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Webhook;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class WebhookEntry
 * @package Hamaryuginh\MandrillBundle\Model\Webhook
 *
 * @method WebhookEntry setId(int $id)
 * @method int getId()
 * @method WebhookEntry setUrl(string $url)
 * @method string getUrl()
 * @method WebhookEntry setDescription(string $description)
 * @method string getDescription()
 * @method WebhookEntry setAuthKey(string $auth_key)
 * @method string getAuthKey()
 * @method WebhookEntry setEvents(array $events)
 * @method array getEvents()
 * @method WebhookEntry setCreatedAt(string $created_at)
 * @method string getCreatedAt()
 * @method WebhookEntry setLastSendedAt(string $last_sent_at)
 * @method string getLastSendedAt()
 * @method WebhookEntry setBatchesSent(int $batches_sent)
 * @method int getBatchesSent()
 * @method WebhookEntry setEventsSent(int $events_sent)
 * @method int getEventsSent()
 * @method WebhookEntry setLastError(string $last_error)
 * @method string getLastError()
 */
class WebhookEntry extends AbstractResponse { }
