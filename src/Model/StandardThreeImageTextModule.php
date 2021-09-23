<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Three standard images with text, presented across a single row.
 */
class StandardThreeImageTextModule extends AbstractModel
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
}
