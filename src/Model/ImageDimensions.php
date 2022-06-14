<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The dimensions extending from the top left corner of the cropped image, or the
 * top left corner of the original image if there is no cropping. Only `pixels` is
 * allowed as the units value for ImageDimensions.
 */
class ImageDimensions extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\IntegerWithUnits
     */
    public $width = null;

    /**
     * @var \Amz\AplusContent\Model\IntegerWithUnits
     */
    public $height = null;
}
