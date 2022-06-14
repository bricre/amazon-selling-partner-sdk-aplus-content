<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Four standard images with text, presented across a single row.
 */
class StandardFourImageTextModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block1 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block2 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block3 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $block4 = null;
}
