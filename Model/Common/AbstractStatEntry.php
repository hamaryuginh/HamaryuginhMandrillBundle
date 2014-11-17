<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 15/11/2014
 * Time: 09:54
 */

namespace Hamaryuginh\MandrillBundle\Model\Common;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class AbstractStatEntry
 * @package Hamaryuginh\MandrillBundle\Model\Response\User
 *
 * @method AbstractStatEntry setSent(int $sent)
 * @method int getSent()
 * @method AbstractStatEntry setHardBounces(int $hardBounces)
 * @method int getHardBounces()
 * @method AbstractStatEntry setSoftBounces(int $softBounces)
 * @method int getSoftBounces()
 * @method AbstractStatEntry setRejects(int $rejects)
 * @method int getRejects()
 * @method AbstractStatEntry setComplaints(int $complaints)
 * @method int getComplaints()
 * @method AbstractStatEntry setUnsubs(int $unsubs)
 * @method int getUnsubs()
 * @method AbstractStatEntry setOpens(int $opens)
 * @method int getOpens()
 * @method AbstractStatEntry setUniqueOpens(int $uniqueOpens)
 * @method int getUniqueOpens()
 * @method AbstractStatEntry setClicks(int $clicks)
 * @method int getClicks()
 * @method AbstractStatEntry setUniqueClicks(int $uniqueClicks)
 * @method int getUniqueClicks()
 */
abstract class AbstractStatEntry extends AbstractResponse { }
