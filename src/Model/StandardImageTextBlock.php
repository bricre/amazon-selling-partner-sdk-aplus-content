<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content standard image and text box block.
 */
class StandardImageTextBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ImageComponent
     */
    public $image = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\ParagraphComponent
     */
    public $body = null;
}
