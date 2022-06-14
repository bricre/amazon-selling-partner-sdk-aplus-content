<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The metadata of an A+ Content document.
 */
class ContentMetadata extends AbstractModel
{
    /**
     * The A+ Content document name.
     *
     * @var string
     */
    public $name = null;

    /**
     * @var \Amz\AplusContent\Model\MarketplaceId
     */
    public $marketplaceId = null;

    /**
     * @var \Amz\AplusContent\Model\ContentStatus
     */
    public $status = null;

    /**
     * @var \Amz\AplusContent\Model\ContentBadgeSet
     */
    public $badgeSet = null;

    /**
     * The approximate age of the A+ Content document and metadata.
     *
     * @var string
     */
    public $updateTime = null;
}
