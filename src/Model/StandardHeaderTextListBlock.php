<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The A+ standard fixed-length list of text, with a related headline.
 */
class StandardHeaderTextListBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextListBlock
     */
    public $block = null;
}
