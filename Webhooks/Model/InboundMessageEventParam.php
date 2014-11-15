<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 12/10/2014
 * Time: 22:23
 */

namespace Hamaryuginh\MandrillBundle\Webhooks\Model;

/**
 * Class InboundMessageEventParam
 * @package Hamaryuginh\MandrillBundle\Webhooks\Model
 */
class InboundMessageEventParam implements WebhookParamInterface
{
    // INFO - http://help.mandrill.com/entries/22092308-What-is-the-format-of-inbound-email-webhooks-

    /**
     * @param $result
     * @return InboundMessageEventParam
     */
    public static function parse($result)
    {
        $inboundMessageEventParam = new InboundMessageEventParam();

        return $inboundMessageEventParam;
    }

    /**
     * @return string|void
     */
    public function getEventName()
    {
        return 'inbound';
    }
}
