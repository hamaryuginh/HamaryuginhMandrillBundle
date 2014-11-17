<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 17/11/2014
 * Time: 22:34
 */

namespace Hamaryuginh\MandrillBundle\Model\Common;

use Hamaryuginh\MandrillBundle\Model\Response\AbstractResponse;

/**
 * Class AbstractContentEntry
 * @package Hamaryuginh\MandrillBundle\Model\Common
 *
 * @method AbstractContentEntry setSubject(string $subject)
 * @method string getSubject()
 * @method AbstractContentEntry setFromEmail(string $from_email)
 * @method string getFromEmail()
 * @method AbstractContentEntry setFromName(string $from_name)
 * @method string getFromName()
 * @method AbstractContentEntry setTo(array $to)
 * @method array getTo()
 * @method AbstractContentEntry setHeaders(array $headers)
 * @method array getHeaders()
 * @method AbstractContentEntry setText(string $text)
 * @method string getText()
 * @method AbstractContentEntry setHtml(string $html)
 * @method string getHtml()
 * @method AbstractContentEntry setAttachments(array $attachments)
 * @method array getAttachments()
 */
abstract class AbstractContentEntry extends AbstractResponse { }
