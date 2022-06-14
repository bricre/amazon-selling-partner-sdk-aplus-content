<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The base response data for all A+ Content operations when a request is
 * successful or partially successful. Individual operations may extend this with
 * additional data.
 */
class AplusResponse extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\MessageSet
     */
    public $warnings = null;
}
