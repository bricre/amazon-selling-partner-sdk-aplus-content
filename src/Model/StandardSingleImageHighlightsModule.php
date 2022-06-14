<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A standard image with several paragraphs and a bulleted list.
 */
class StandardSingleImageHighlightsModule extends AbstractModel
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
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $textBlock1 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $textBlock2 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $textBlock3 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardHeaderTextListBlock
     */
    public $bulletedListBlock = null;
}
