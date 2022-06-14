<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The error response for when a request is unsuccessful.
 */
class ErrorList extends AbstractModel
{
    /**
     * A list of error responses returned when a request is unsuccessful.
     *
     * @var \Amz\AplusContent\Model\Error[]
     */
    public $errors = null;
}
