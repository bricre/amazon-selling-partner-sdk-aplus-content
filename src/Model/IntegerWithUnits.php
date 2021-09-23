<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A whole number dimension and its unit of measurement. For example, this can
 * represent 100 pixels.
 */
class IntegerWithUnits extends AbstractModel
{
    /**
     * The dimension value.
     *
     * @var int
     */
    public $value = null;

    /**
     * The unit of measurement.
     *
     * @var string
     */
    public $units = null;
}
