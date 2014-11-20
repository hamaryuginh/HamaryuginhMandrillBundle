<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 20:24
 */

namespace Hamaryuginh\MandrillBundle\Model\Common;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class AbstractAddResponse
 * @package Hamaryuginh\MandrillBundle\Model\Common
 *
 * @method AbstractAddResponse setEmail(string $email)
 * @method string getEmail()
 * @method AbstractAddResponse setAdded(boolean $added)
 * @method boolean getAdded()
 */
abstract class AbstractAddResponse extends AbstractResponse { }
