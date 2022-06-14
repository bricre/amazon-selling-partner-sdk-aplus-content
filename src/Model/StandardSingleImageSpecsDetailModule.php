<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A standard image with paragraphs and a bulleted list, and extra space for
 * technical details.
 */
class StandardSingleImageSpecsDetailModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\ImageComponent
     */
    public $image = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $descriptionHeadline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $descriptionBlock1 = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $descriptionBlock2 = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $specificationHeadline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardHeaderTextListBlock
     */
    public $specificationListBlock = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $specificationTextBlock = null;
}
