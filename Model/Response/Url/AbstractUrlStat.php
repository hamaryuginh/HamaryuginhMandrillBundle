<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 21/11/2014
 * Time: 13:26
 */

namespace Hamaryuginh\MandrillBundle\Model\Response\Url;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class AbstractUrlStat
 * @package Hamaryuginh\MandrillBundle\Model\Response\Url
 *
 * @method AbstractUrlStat setSent(int $sent)
 * @method int getSent()
 * @method AbstractUrlStat setClicks(int $clicks)
 * @method int getClicks()
 * @method AbstractUrlStat setUniqueClicks(int $unique_clicks)
 * @method int getUniqueClicks()
 */
abstract class AbstractUrlStat extends AbstractResponse { }
