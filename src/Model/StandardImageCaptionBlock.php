<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content standard image and caption block.
 */
class StandardImageCaptionBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ImageComponent
     */
    public $image = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $caption = null;
}
