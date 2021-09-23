<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The top left corner of the cropped image, specified in the original image's
 * coordinate space.
 */
class ImageOffsets extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\IntegerWithUnits
     */
    public $x = null;

    /**
     * @var \Amz\AplusContent\Model\IntegerWithUnits
     */
    public $y = null;
}
