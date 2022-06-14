<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The full context for an A+ Content publishing event.
 */
class PublishRecord extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\MarketplaceId
     */
    public $marketplaceId = null;

    /**
     * @var \Amz\AplusContent\Model\LanguageTag
     */
    public $locale = null;

    /**
     * @var \Amz\AplusContent\Model\Asin
     */
    public $asin = null;

    /**
     * @var \Amz\AplusContent\Model\ContentType
     */
    public $contentType = null;

    /**
     * @var \Amz\AplusContent\Model\ContentSubType
     */
    public $contentSubType = null;

    /**
     * @var \Amz\AplusContent\Model\ContentReferenceKey
     */
    public $contentReferenceKey = null;
}
