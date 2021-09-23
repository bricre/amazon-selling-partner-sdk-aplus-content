<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A standard background image with a floating text box.
 */
class StandardImageTextOverlayModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ColorType
     */
    public $overlayColorType = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block = null;
}
