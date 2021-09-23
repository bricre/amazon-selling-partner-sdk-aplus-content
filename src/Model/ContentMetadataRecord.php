<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The metadata for an A+ Content document, with additional information for content
 * management.
 */
class ContentMetadataRecord extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ContentReferenceKey
     */
    public $contentReferenceKey = null;

    /**
     * @var \Amz\AplusContent\Model\ContentMetadata
     */
    public $contentMetadata = null;
}
