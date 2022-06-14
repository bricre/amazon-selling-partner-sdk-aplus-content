<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Four standard images with text, presented on a grid of four quadrants.
 */
class StandardFourImageTextQuadrantModule extends AbstractModel
{
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
