<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A reference to an image, hosted in the A+ Content media library.
 */
class ImageComponent extends AbstractModel
{
    /**
     * This identifier is provided by the Selling Partner API for Uploads.
     *
     * @var string
     */
    public $uploadDestinationId = null;

    /**
     * @var \Amz\AplusContent\Model\ImageCropSpecification
     */
    public $imageCropSpecification = null;

    /**
     * The alternative text for the image.
     *
     * @var string
     */
    public $altText = null;
}
