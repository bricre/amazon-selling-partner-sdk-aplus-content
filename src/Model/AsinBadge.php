<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A flag that provides additional information about an ASIN. This is contextual
 * and may change depending on the request that generated it.
 */
class AsinBadge extends AbstractModel
{
    protected $isRawObject = true;
}
