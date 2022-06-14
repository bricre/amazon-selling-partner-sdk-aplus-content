<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content standard image and text block, with a related caption. The
 * caption may not display on all devices.
 */
class StandardImageTextCaptionBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $caption = null;
}
