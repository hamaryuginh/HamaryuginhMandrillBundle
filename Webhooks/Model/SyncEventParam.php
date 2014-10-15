<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 12/10/2014
 * Time: 22:18
 */

namespace Hamaryuginh\MandrillBundle\Webhooks\Model;
use Hamaryuginh\MandrillBundle\Utils\ArrayUtils;

/**
 * Class SyncEventParam
 * @package Hamaryuginh\MandrillBundle\Webhooks\Model
 */
class SyncEventParam
{
    /**
     * The integer UTC unix timstamp that the event occurred.
     *
     * @var int
     */
    private $ts;

    /**
     * The list the sync event applies to (whitelist or blacklist)
     *
     * @var string
     */
    private $type;

    /**
     * The name of the event.
     * Possible values: add (whitelist or blacklist), remove (whitelist or blacklist), change (blacklist only)
     *
     * @var string
     */
    private $action;

    /**
     * Details of the entry.
     * Contains an array of key/value pairs with the following keys:
     * { reason, detail, last_event_at, email, created_at, expires_at, expired, subaccount, sender }
     *
     * @var array
     */
    private $reject;


    /**
     * @param $result
     * @return SyncEventParam
     */
    public static function parse($result)
    {
        $syncEventParam = new SyncEventParam();

        $syncEventParam->setTs(ArrayUtils::getValueAt($result, 'ts'));
        $syncEventParam->setType(ArrayUtils::getValueAt($result, 'type'));
        $syncEventParam->setAction(ArrayUtils::getValueAt($result, 'action'));
        $syncEventParam->setReject(ArrayUtils::getValueAt($result, 'reject'));

        return $syncEventParam;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return array
     */
    public function getReject()
    {
        return $this->reject;
    }

    /**
     * @param array $reject
     */
    public function setReject($reject)
    {
        $this->reject = $reject;
    }

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}