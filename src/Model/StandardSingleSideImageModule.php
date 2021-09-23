<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A standard headline and body text with an image on the side.
 */
class StandardSingleSideImageModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\PositionType
     */
    public $imagePositionType = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block = null;
}
