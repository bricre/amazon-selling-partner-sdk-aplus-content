<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Standard images with text, presented one at a time. The user clicks on
 * thumbnails to view each block.
 */
class StandardMultipleImageTextModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\StandardImageTextCaptionBlock[]
     */
    public $blocks = null;
}
