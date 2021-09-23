<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Two images, two paragraphs, and two bulleted lists. One image is smaller and
 * displayed in the sidebar.
 */
class StandardImageSidebarModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageCaptionBlock
     */
    public $imageCaptionBlock = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextBlock
     */
    public $descriptionTextBlock = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextListBlock
     */
    public $descriptionListBlock = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextBlock
     */
    public $sidebarImageTextBlock = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextListBlock
     */
    public $sidebarListBlock = null;
}
