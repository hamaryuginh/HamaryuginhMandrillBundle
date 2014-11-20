<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 19/11/2014
 * Time: 20:30
 */

namespace Hamaryuginh\MandrillBundle\Model\Common;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class AbstractDeleteResponse
 * @package Hamaryuginh\MandrillBundle\Model\Common
 *
 * @method AbstractDeleteResponse setEmail(string $email)
 * @method string getEmail()
 * @method AbstractDeleteResponse setDeleted(boolean $deleted)
 * @method boolean getDeleted()
 */
abstract class AbstractDeleteResponse extends AbstractResponse { }
