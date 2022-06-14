<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content standard comparison product block.
 */
class StandardComparisonProductBlock extends AbstractModel
{
    /**
     * The rank or index of this comparison product block within the module. Different
     * blocks cannot occupy the same position within a single module.
     *
     * @var int
     */
    public $position = null;

    /**
     * @var \Amz\AplusContent\Model\ImageComponent
     */
    public $image = null;

    /**
     * The comparison product title.
     *
     * @var string
     */
    public $title = null;

    /**
     * @var \Amz\AplusContent\Model\Asin
     */
    public $asin = null;

    /**
     * Determines whether this block of content is visually highlighted.
     *
     * @var bool
     */
    public $highlight = null;

    /**
     * Comparison metrics for the product.
     *
     * @var \Amz\AplusContent\Model\PlainTextItem[]
     */
    public $metrics = null;
}
