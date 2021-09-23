<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A content document with additional information for content management.
 */
class ContentRecord extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ContentReferenceKey
     */
    public $contentReferenceKey = null;

    /**
     * @var \Amz\AplusContent\Model\ContentMetadata
     */
    public $contentMetadata = null;

    /**
     * @var \Amz\AplusContent\Model\ContentDocument
     */
    public $contentDocument = null;
}
