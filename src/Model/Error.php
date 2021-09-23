<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Error response returned when the request is unsuccessful.
 */
class Error extends AbstractModel
{
    /**
     * The code that identifies the type of error condition.
     *
     * @var string
     */
    public $code = null;

    /**
     * A human readable description of the error condition.
     *
     * @var string
     */
    public $message = null;

    /**
     * Additional information, if available, to clarify the error condition.
     *
     * @var string
     */
    public $details = null;
}
