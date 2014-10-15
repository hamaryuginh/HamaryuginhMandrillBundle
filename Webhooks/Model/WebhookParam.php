<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 15/10/2014
 * Time: 12:37
 */

namespace Hamaryuginh\MandrillBundle\Webhooks\Model;

/**
 * Interface WebhookParam
 * @package Hamaryuginh\MandrillBundle\Webhooks\Model
 */
interface WebhookParam
{
    /** @return string */
    public function getEventName();
} 