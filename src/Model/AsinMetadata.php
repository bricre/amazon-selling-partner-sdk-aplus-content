<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The A+ Content ASIN with additional metadata for content management. If you
 * don't include the `includedDataSet` parameter in a call to the
 * listContentDocumentAsinRelations operation, the related ASINs are returned
 * without metadata.
 */
class AsinMetadata extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\Asin
     */
    public $asin = null;

    /**
     * @var \Amz\AplusContent\Model\AsinBadgeSet
     */
    public $badgeSet = null;

    /**
     * @var \Amz\AplusContent\Model\Asin
     */
    public $parent = null;

    /**
     * The title for the ASIN in the Amazon catalog.
     *
     * @var string
     */
    public $title = null;

    /**
     * The default image for the ASIN in the Amazon catalog.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * @var \Amz\AplusContent\Model\ContentReferenceKeySet
     */
    public $contentReferenceKeySet = null;
}
