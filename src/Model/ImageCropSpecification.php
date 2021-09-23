<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The instructions for optionally cropping an image. If no cropping is desired,
 * set the dimensions to the original image size. If the image is cropped and no
 * offset values are provided, then the coordinates of the top left corner of the
 * cropped image, relative to the original image, are defaulted to (0,0).
 */
class ImageCropSpecification extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ImageDimensions
     */
    public $size = null;

    /**
     * @var \Amz\AplusContent\Model\ImageOffsets
     */
    public $offset = null;
}
