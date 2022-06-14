<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Standard headline text, an image, and body text.
 */
class StandardHeaderImageTextModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block = null;
}
