<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content document. This is the enhanced content that is published to
 * product detail pages.
 */
class ContentDocument extends AbstractModel
{
    /**
     * The A+ Content document name.
     *
     * @var string
     */
    public $name = null;

    /**
     * @var \Amz\AplusContent\Model\ContentType
     */
    public $contentType = null;

    /**
     * @var \Amz\AplusContent\Model\ContentSubType
     */
    public $contentSubType = null;

    /**
     * @var \Amz\AplusContent\Model\LanguageTag
     */
    public $locale = null;

    /**
     * @var \Amz\AplusContent\Model\ContentModuleList
     */
    public $contentModuleList = null;
}
